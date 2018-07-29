<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\VerifyUser;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Mail\NewUserAuto;
use Illuminate\Support\Facades\Mail;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::orderBy('id', 'asc')->paginate(5);
        return view('admin.usermanagement.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::orderBy('id', 'asc')->get();
        return view('admin.usermanagement.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'autogeneratepassword' => ['required'],
            'role' => ['required']
        ]);
        if($request->autogeneratepassword === 0) {
            $this->validate($request->password, [
                'password' => ['required', 'min:8'],
                'password_confirmation' => ['required_with:password', 'same:password']
            ]);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->autogeneratepassword === 1) {
            $random = uniqid();
            $user->password = Hash::make($random);
        }
        else {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();
        //add role
        $user->roles()->attach($request->role, ['user_type' => 'App\User']);

        //create verify for the user
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => Password::getRepository()->createNewToken(),
        ]);

        //create user detail
        $userDetail = \App\UserDetail::create([
            'user_id' => $user->id,
        ]);

        //attach noimage for the new user
        $image = \App\Image::first();
        $user->images()->attach($image, ['option' => '1', 'info' => 'Profile Picture']);
        
        //call event new user mail
        Mail::to($user->email)->queue(new NewUserAuto($user));

        $request->session()->flash('flashmessage', 'User ' . $user->name . ' is created!');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.usermanagement.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::orderBy('id', 'asc')->get();
        return view('admin.usermanagement.user.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'role' => ['required']
        ]);

        if($request->inputchangepassword == 'true') {
            $this->validate($request, [
                'password' => ['required', 'min:8'],
                'password_confirmation' => ['required_with:password', 'same:password']
            ]);
        }

        //detach the roles
        $user->roles()->detach();

        //set the name and email
        $user->name = $request->name;
        $user->email = $request->email;

        //if change password is true set the new password
        if($request->inputchangepassword == 'true') {
            $user->password = Hash::make($request->password);
        }

        //save the new credentials
        $user->save();

        //save the roles
        if(!empty($request->role)) 
        {
            $user->roles()->attach($request->role, ['user_type' => 'App\User']);
        }

        //check if there is no profile image add no image
        if(empty($user->images()->wherePivot('option', 1)->first())) {
            $noimage = \App\Image::first();
            $user->images()->attach($noimage, ['option' => '1', 'info' => 'Profile Image']);    
        }

        //change the display status according to request
        $user->detail->display = $request->display;

        //save the display status
        $user->detail->save();

        //send the flash message
        $request->session()->flash('flashmessage', 'User ' . $user->name . ' is updated!');
        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('user.index')->with('flashmessage', 'User delete successfully!');
    }
}

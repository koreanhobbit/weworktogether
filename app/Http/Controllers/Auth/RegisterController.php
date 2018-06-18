<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\VerifyUser;
use App\Mail\VerifyReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    protected function redirectTo() 
    {
        $user = Auth::user();
        //if role is customer
        if($user->hasRole('customer')) {
            return route('mainpage.index');
        }

        //if role is guide
        if($user->hasRole('guide')) {
            return route('guide.profile.index', ['user' => $user->id, 'name' => $user->name]);
        }

        //if role is provider
        if($user->hasRole('provider')) {
            return route('manage.index');
        }

        return route('mainpage.index');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getVerification', 'getVerificationError']]);
    }

    public function showRegistrationForm()
    {
        return view('/');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'register-name' => 'required|string|max:255',
            'register-email' => 'required|string|email|max:255|unique:users,email',
            'autogeneratepassword' =>'nullable',
            'registerpassword' => 'required_without:autogeneratepassword|string|min:6|confirmed',
            'registerrole' => 'required|integer|between:5,7',
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['register-name'],
            'email' => $data['register-email'],
            'password' => bcrypt($data['registerpassword']),
        ]);

        //create verify for the user
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => Password::getRepository()->createNewToken(),
        ]);

        //add role 
        $role = Role::find($data['registerrole']);
        $user->attachRole($role);

        Mail::to($user->email)->queue(new VerifyReg($user));
        return $user;
    }

    protected function verifyUser($token)
    {
        $verifyuser = VerifyUser::where('token', $token)->first();
        if(isset($verifyuser)) 
        {
            $user = $verifyuser->user;

            if(!$user->verified) {
                $user->verified = 1;
                $user->save();
                $status = "Your email is verified. You can now login.";
            }
            else
            {
                $status = "Your email is already verified. You can now login.";
            }
        }
        else
        {
            return redirect()->route('mainpage.index')->with('login', $status); 
        }

        return redirect()->route('mainpage.index')->with('login', $status);
    }

    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect()->route('mainpage.index')->with('login', 'We sent you an activation code. Check your email and check on the link to verify.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Testimony;
use App\User;

class TestimonyController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::orderBy('created_at', 'desc')->paginate(20);
    	return view('admin.testimony.index', compact('testimonies'));
    }

    public function show()
    {
        $testimonies = Testimony::where('is_display', '=' ,1)->orderBy('is_display', 'asc')->paginate(15);
        return view('admin.testimony.displayed', compact('testimonies'));
    }

    public function manage(Request $request)
    {
        if($request->ajax() && $request->title == 'userpage') {
            $users = Role::find($request->role)->users()->with('testimonies')->paginate(15, ['*'], 'userpage');
            return view('admin.testimony.partial._manage', compact('users'))->render();
        }

    	if($request->ajax() && $request->title == 'reloadUsers') {
			$users = Role::find($request->role)->users()->with('testimonies')->paginate(15, ['*'], 'userpage');  
			return view('admin.testimony.partial._manage', compact('users'))->render();
    	}

    	$roles = Role::orderBy('id', 'desc')->get();
    	return view('admin.testimony.manage', compact('roles'));
    }

    public function create(User $user) 
    {
        return view('admin.testimony.create', compact('user'));
    }

    public function store(Request $request, User $user)
    {
        $this->validate($request, [
            'testimony' => 'required|string',
            'rating' => 'required|integer',
        ]);

        $testimony = new Testimony;

        $testimony->addNewTestimony($request, $user);

        return redirect()->route('testimony.index')->with('flashmessage', 'Testimony was successfully added!');
    }

    public function edit(Testimony $testimony)
    {
        return view('admin.testimony.edit', compact('testimony'));
    }

    public function update(Request $request, Testimony $testimony)
    {
        if($request->ajax() && $request->title == 'changeDisplay') {
            if($request->value == 0) {
                $testimony->is_display = 1;
                $testimony->save();
            }

            if($request->value == 1) {
                $testimony->is_display = 0;
                $testimony->save();
            } 

            return $testimony;
        }

        $this->validate($request, [
            'testimony' => 'required|string',
            'rating' => 'required|integer',
        ]);

        $testimony->testimony = $request->testimony;
        $testimony->rating = $request->rating;
        $testimony->save();

        return redirect()->route('testimony.index')->with('flashmessage', 'Testimony was succesfully edited!');
    }

    public function destroy(Testimony $testimony)
    {
        if($testimony->is_display == 1) {
            return redirect()->route('testimony.index')->with('flashmessage', 'Testimony is on display. It cannot be deleted!');
        }
        $testimony->delete();
        return redirect()->route('testimony.index')->with('flashmessage', 'Testimony was successfully deleted!'); 
    }
}

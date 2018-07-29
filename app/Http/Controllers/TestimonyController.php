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

    public function create() 
    {
        $images = \App\Image::where('id', '<>', 1)->paginate(12);
        return view('admin.testimony.create', compact('images'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'testimony' => 'required|string',
            'name' => 'required|string',
            'company' => 'required|string',
            'image' => 'required|integer',
        ]);

        $testimony = \App\Testimony::addNewTestimony($request);

        $image = \App\Image::find($request->image);

        $testimony->images()->attach($image, ['option' => 1, 'info' => 'Profile Picture']);

        return redirect()->route('testimony.index')->with('flashmessage', 'Testimony was successfully added!');
    }

    public function edit(Testimony $testimony)
    {
        $images = \App\Image::where('id', '<>', 1)->paginate(12);
        return view('admin.testimony.edit', compact('testimony', 'images'));
    }

    public function update(Request $request, Testimony $testimony)
    {
        $this->validate($request, [
            'testimony' => 'required|string',
            'name' => 'required|string',
            'company' => 'required|string',
            'image' => 'required|integer',
        ]);

        //save all updates
        $testimony->testimony = $request->testimony;
        $testimony->name = $request->name;
        $testimony->company = $request->company;
        $testimony->save();

        //remove attached image
        $testimony->images()->detach();

        //add image
        $image = \App\Image::find($request->image);
        $testimony->images()->attach($image, ['option' => 1, 'info' => 'Profile Image']);

        return redirect()->route('testimony.index')->with('flashmessage', 'Testimony was succesfully edited!');
    }

    public function destroy(Testimony $testimony)
    {
        $testimony->delete();
        return redirect()->route('testimony.index')->with('flashmessage', 'Testimony was successfully deleted!'); 
    }
}

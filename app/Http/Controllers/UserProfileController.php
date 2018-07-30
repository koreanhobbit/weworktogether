<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\User;
use App\SocialMediaType;
use App\MessengerType;
use App\UserDetail;
use App\Sosmed;
use App\Messenger;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user, Request $request)
    {
        $user = User::where('id', $user)->first();

        if($request->ajax() && $request->title == 'reloadImageListContainer') {
            $images = Image::where('user_id', $user->id)->get();
            return view('admin_user.profile.partial._profile_image',compact('images'))->render();
        }

        $messengers = MessengerType::orderBy('id', 'asc')->get();
        $socialmedias = SocialMediaType::where('slug', '<>', 'youtube')->orderBy('id', 'asc')->get();
        $images = Image::where('user_id', $user->id)->where('id', '<>', 1)->get();

        return view('admin_user.profile.index', compact('images', 'user', 'socialmedias', 'messengers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($user, Request $request)
    {

        $user = User::where('id', $user)->first();
        
        $this->validate($request, [
            'name' => 'required|string|min:2|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'verified' => 'required|integer',
            'location' => 'nullable|string',
            'education' => 'nullable|string',
            'description' => 'nullable|string',
            'experience' => 'nullable|string',
            'birthday' => 'nullable|date',
            'whatsapp' => 'nullable|string',
            'profileImageId' => 'nullable|integer',
            'socialmedia.*' => 'nullable|string',
            'messenger.*' => 'nullable|string',
            'display' => 'required|integer',
            'title' => 'nullable|string',
        ]);

        //save to database
        $user->name = $request->name;
        $user->email = $request->email;
        $user->verified = $request->verified;
        $user->save();

        //add user details        
        if(empty($user->detail)) {
            $detail = new UserDetail;
        }
        else {
            $detail = $user->detail;
        }

        if(!empty($request->birthday)) 
        {
            $birthday = date("Y-m-d", strtotime($request->birthday));
        }
        else
        {
            $birthday = null;
        }

        $detail->birthday = $birthday;
        $detail->birthday_string = $request->birthday;
        $detail->education = $request->education;
        $detail->phone = $request->whatsapp;
        $detail->location = $request->location;
        $detail->description = trim($request->description);
        $detail->experience = trim($request->experience);
        $detail->user_id = $user->id;
        $detail->display = $request->display;
        $detail->title = $request->title;
        $detail->save();

        //add image
        if(!empty($request->profileImageId)) {
            //clear the previous profile picture if exists
            if(!empty($user->images()->wherePivot('option', 1)->first())) {
                $image = Image::find($user->images()->wherePivot('option', 1)->first()->id);
                $user->images()->detach($image);
            }

            $profile = Image::find($request->profileImageId);
            $user->images()->attach($profile, ['option' => '1', 'info' => 'Profile Picture']);
        }

        //add social media
        foreach($request->socialmedia as $key => $item) {
            $socialMediaType = $user->socialmedias()->where('social_media_type_id', $key)->first();

            //check and delete if its already previous record in the database
            if(!empty($socialMediaType)) {
                $socialMediaType->value = $item;
                $socialMediaType->save();
            }
            else {
                $sosmed = new Sosmed;
                $sosmed->user_id = $user->id;
                $sosmed->social_media_type_id = $key;
                $sosmed->value = $item;
                $sosmed->save();
            }
        }

        //add messenger
        foreach($request->messenger as $key => $item) {
            //check and delete if there is already previous record
            if(!empty($user->messengers()->where('messenger_type_id', $key)->first())) {
                $existMessenger = $user->messengers()->where('messenger_type_id', $key)->first();
                $existMessenger->value = $item;
                $existMessenger->save();
            }

            if(!empty($item)) {
                $mes = new Messenger;
                $mes->user_id = $user->id;
                $mes->messenger_type_id = $key;
                $mes->value = $item;
                $mes->save();
            }
        }

        return redirect()->route('user.profile.index', ['user' => $user->id, 'name' => $user->name])->with('flashmessage', 'Profile was successfully updated!');
    }
}

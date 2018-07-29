<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Image;
use App\Websosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Setting $setting)
    {
        
        if ($request->ajax() && $request->title == 'logoImagePage') {
            $logoImages = Image::where('id', '<>', 1)->orderBy('id', 'desc')->paginate(12, ['*'], 'logoImagePage');
            return view('admin.setting.partials._logo', compact('logoImages'))->render();
        }

        if ($request->ajax() && $request->title == 'iconImagePage') {
            $iconImages = Image::where('id', '<>', 1)->orderBy('id', 'desc')->paginate(12, ['*'], 'iconImagePage');
            return view('admin.setting.partials._icon', compact('iconImages'))->render();
        }

        //mark if logo exist or not in the product
        $logoMark = false;
        if($setting->images()->wherePivot('option', 4)->first()) {
            $logoMark = true;
        }

        //if there is logo send the properties
        if($logoMark) {
             $logo = $setting->logoImage();              
        }
        else {
            $logo = null;
        }

        //mark if icon exist or not in the product
        $iconMark = false;
        if($setting->images()->wherePivot('option', 5)->first()) {
            $iconMark = true;
        }

        //if there is featured image send the properties
        if($iconMark) {
             $icon = $setting->iconImage();              
        }
        else {
            $icon = null;
        }

        $iconImages = Image::where('id', '<>', 1)->orderBy('id', 'desc')->paginate(12, ['*'], 'iconImagePage');

        $logoImages = Image::where('id', '<>', 1)->orderBy('id', 'desc')->paginate(12, ['*'], 'logoImagePage');

    
        return view('admin.setting.index', compact('setting', 'logoMark', 'logo', 'iconMark', 'icon' ,'logoImages', 'iconImages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request, [
            'name' => ['required', 'min:2'],
            'tagline' => ['required', 'min:2'],
            'about' => 'required|string',
            'branch1' => 'required|string',
            'branch2' => 'required|string',
            'address1' => 'required|string',
            'address2' => 'required|string',
            'email1' => ['required', 'email'],
            'email2' => ['required', 'email'],
            'phone' => ['required', 'string'],
        ]);

        $setting->name = trim($request->name);
        $setting->tagline = trim($request->tagline);
        $setting->address1 = $request->address1;
        $setting->address2 = $request->address2;
        $setting->branch1 = $request->branch1;
        $setting->branch2 = $request->branch2;
        $setting->email1 = $request->email1;
        $setting->email2 = $request->email2;
        $setting->phone = $request->phone;
        $setting->about = $request->about;
        $setting->save();

        foreach(Websosmed::get() as $contact) {
            $name = $contact->slug;
            $contact->value = $request->$name;
            $contact->save();
        }

        //detach all image in logo
        $setting->images()->detach();

        //save the new logo
        if(!empty($request->logo)) {
            //find the image
            $logo = Image::find($request->logo);
            $setting->images()->attach($logo, ['option' => 4, 'info' => 'logo']);
        }

        if(!empty($request->icon)) {
            //find the icon image
            $icon = Image::find($request->icon);
            $setting->images()->attach($icon, ['option' => 5, 'info' => 'icon']);
        }

        //detach all image in theme
        $setting->themesetting->images()->detach();

        //save the mainpage controller
        foreach($setting->themesetting->menus as $menu) {
            $name = $menu->name . 'controller';
            $menu->show = $request->$name;
            $menu->save();
        }
        
        return redirect()->route('setting.index', ['setting' => 1 ])->with('flashmessage', 'Setting is reset');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

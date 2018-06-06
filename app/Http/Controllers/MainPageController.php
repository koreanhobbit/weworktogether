<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Country;
use App\Service;
use App\Testimony;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //load area in fast booking
        if($request->ajax() && $request->title == 'loadArea') {
            $areas = Country::find($request->countryId)->areas;
            
            return view('frontend.theme.medicio.main_page.partials._area', compact('areas'))->render();
        } 

        //special for the service selection
        if(!empty(Service::getSpecial())) {
            $special = Service::getSpecial();
        }
        else{
            $special = Service::getOneService();
        }

        //testimony
        $testimonies = Testimony::where('is_display', '1')->get();

        $pricings = Service::where('highlight', 1)->take(3)->get();

        $services = Service::orderBy('name', 'asc')->get();
        $oriCountries = Country::where('type', 0)->orderBy('id', 'asc')->get();
        $countries = Country::where('type', 1)->orderBy('id', 'asc')->get(); 
        $setting = Setting::with(['themesetting', 'themesetting.menus', 'partners'])->first();

        //themesetting
        foreach($setting->themesetting->menus as $menu) {
            if($menu->name == 'testimony') {
                $testimonyController = $menu->show;
            }

            if($menu->name == 'partner') {
                $partnerController = $menu->show;
            }
        }

        return view('frontend.theme.medicio.main_page.index', compact('setting', 'countries', 'services', 'pricings', 'special', 'oriCountries', 'testimonies', 'testimonyController', 'partnerController'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

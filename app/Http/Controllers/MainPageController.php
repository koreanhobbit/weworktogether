<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //gather the user
        $users = \App\User::orderBy('id', 'asc')->with('detail')->get();

        //check for the showed user
        $showedUsers = \App\UserDetail::where('display', 1)->get();

        //put the setting credentials
        $setting = \App\Setting::with(['themesetting', 'themesetting.menus', 'partners', 'contacts'])->first();

        //put the testimony credentials
        $testimonies = \App\Testimony::orderBy('created_at', 'desc')->get();

        //put the projects list for portfolio
        $projects = \App\Product::orderBy('id', 'desc')->get();

        //put the project categories list
        $categories = \App\Product::with('category')->select('product_category_id')->distinct()->get();

        return view('frontend.theme.butterfly.mainpage.index', compact('users', 'setting', 'showedUsers', 'testimonies', 'projects', 'categories'));
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

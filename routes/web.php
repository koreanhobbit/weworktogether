<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//####################//
//######MAINPAGE######//
//####################//

Route::get('/', 'MainPageController@index')->name('mainpage.index');

//contact message
Route::post('/contact', 'ContactController@store')->name('contact.store');

//####################//
//########AUTH########//
//####################//
Route::post('/login', 'Auth\LoginController@login')->name('login.attempt');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('/register', 'Auth\RegisterController@register')->name('register.attempt');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('/password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser')->name('user.verify');


//####################//
//######MANAGE########//
//####################//
Route::prefix('manage')->middleware('auth')->group(function() {

    
    //Image
    Route::resource('image', 'ImageController');


    //Superadministrator Policy
    Route::middleware('role:superadministrator')->group(function() {
        //##Media Management##//
        
        //File
        Route::resource('file', 'FileController');

        //Scanned File 
        Route::resource('scannedfile', 'ScannedfileController');

        //##user management##//
        //user
        Route::resource('user','UserController');

        //role
        Route::resource('role', 'RoleController');

        //permission
        Route::resource('permission', 'PermissionController');

        //##Blog##//
        Route::resource('blog', 'BlogController');
        Route::put('/blog/publish/{blog}', 'BlogPublishingController@index')->name('blog.publish');


        //Tag
        Route::post('tag', 'TagController@store')->name('tag.store');

        //Service
        Route::resource('service', 'ServiceController');

    });

    //superadministrator or administrator
    Route::middleware('role:superadministrator|administrator')->group(function() {

        //##Testimony Management##//
        Route::delete('testimony/{testimony}', 'TestimonyController@destroy')->name('testimony.destroy');

        Route::put('testimony/{testimony}', 'TestimonyController@update')->name('testimony.update');

        Route::get('testimony/{testimony}/edit', 'TestimonyController@edit')->name('testimony.edit');

        Route::post('testimony', 'TestimonyController@store')->name('testimony.store');

        Route::get('testimony/create', 'TestimonyController@create')->name('testimony.create');

        Route::get('testimony', 'TestimonyController@index')->name('testimony.index');

        //##Product##//
        Route::resource('product', 'ProductController');

        //##Product Type##//
        Route::resource('productcategory', 'ProductCategoryController');

        //## General Settings ##//
        Route::get('/setting/{setting}/index', 'SettingController@index')->name('setting.index');
        Route::put('/setting/{setting}', 'SettingController@update')->name('setting.update');

        //##partner##//
        Route::resource('setting/partner', 'PartnerController');

        //#response message#//
        Route::put('/response/{contact}', 'ResponseMessage@update')->name('response.update');

        //#dashboard#//
        Route::get('/', 'HomeController@index')->name('manage.index');

    });
});




//####################//
//##CUSTOMER BACKEND##//
//####################//

Route::prefix('user')->middleware(['auth', 'myauth'])->group(function() {

    //#profile#//
    
    Route::get('{user}/profile/{name}', 'UserProfileController@index')->name('user.profile.index');

    Route::put('{user}/profile/{name}/update', 'UserProfileController@update')->name('user.profile.update');
});

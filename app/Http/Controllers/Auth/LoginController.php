<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        $user = Auth::user();
        if($user->hasRole('superadministrator')) {
            return route('manage.index');
        }
        if($user->hasRole(['customer', 'provider'])) {
            return route('mainpage.index');
        }

        if($user->hasRole('guide')) {
            if(empty($user->detail)) {
                return route('guide.profile.index', ['user' => $user->id, 'name' => $user->name]);
            }

            else {
                return route('guide.dashboard.index', ['user' => $user->id, 'name' => $user->name]);
            }
            return route('mainpage.index');
        }

        return route('mainpage.index'); 
    }

    public function showLoginForm()
    {
        return view('/');
    } 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

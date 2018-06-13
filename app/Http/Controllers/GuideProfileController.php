<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class GuideProfileController extends Controller
{
    public function index(User $user) 
    {
    	return view('admin_guide.profile.index');
    }
}

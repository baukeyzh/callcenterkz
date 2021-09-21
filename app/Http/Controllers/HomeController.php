<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::guard('web')->check()){
            return redirect()->route('track');
        }
<<<<<<< HEAD
=======
        else return redirect()->route('admin.users');
>>>>>>> 3a4d427 (first commit)
    }

    public function welcome()
    {
        if (Auth::guard('web')->check()){
            return redirect()->route('track');
        }
    }
}

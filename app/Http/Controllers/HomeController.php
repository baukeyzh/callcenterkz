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
            return view('user.tracking')->with('error_msg','');
        }
        else return redirect()->route('admin.users');
    }

    public function welcome()
    {
        if (Auth::guard('web')->check()){
            return redirect()->route('track');
        }
        return redirect()->route('admin.home');
    }
}

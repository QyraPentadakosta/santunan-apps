<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // return 'b';
        // dd(Auth::user());
        if (Auth::user()->id != null) {
            if (Auth::user()->roles == 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/user');
            }

        } else {
            return redirect('/');
        }

    }
}

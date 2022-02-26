<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class AdminController extends Controller
{
    public function index()
    {
        return 'admin';
        // return View('pages.home.index');
    }
}

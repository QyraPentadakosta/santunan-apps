<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return View('pages.admin.index');
    }

    public function pengajuan()
    {
        return 'anggota';
    }
}

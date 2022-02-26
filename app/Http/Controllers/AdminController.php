<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class AdminController extends Controller
{
    public function index()
    {
        return View('pages.admin.index');
    }

    public function anggota()
    {
        return 'anggota';
    }

    public function iuran()
    {
        return 'iuran';
    }

    public function pengajuan()
    {
        return 'pengajuan';
    }
}

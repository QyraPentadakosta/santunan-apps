<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return View('pages.admin.index');
    }

    public function anggota()
    {
        $user = DB::table('users')->where('roles','user')->get();
        return View('pages.admin.anggota',compact('user'));

    }

    public function tambahAnggota(Request $request)
    {
        $val = Validator::make($request->all(),[
            'nama' =>'required',
            'nik' =>'required|max:16|min:16',
            'kk' =>'required',
            'tempat' =>'required',
            'tgl' =>'required',
            'email' =>'required',
            'hp' =>'required',
            'jk' =>'required',
            'password' =>'required',
        ]);

        if ($val->fails()) {
            return 'gagal';
        }else{
            DB::table('users')->insert([
                'roles' => 'user',
                'name' =>$request->nama,
                'nik' =>$request->nik,
                'kk' =>$request->kk,
                'ttl' => $request->tempat.', '.$request->tgl,
                'email' =>$request->email,
                'hp' =>$request->hp,
                'jk' =>$request->jk,
                'password' => Hash::make($request->password),
                'created_at' => Carbon::now(),
            ]);
            return redirect('/admin/anggota');
        }
    }

    public function iuran()
    {
        $user = DB::table('users')->where('roles','user')->get();
        $iuran = DB::table('tb_iuran')
        ->join('users','tb_iuran.id_user','users.id')
        ->select([
            'tb_iuran.*',
            'users.name as nama',
            'users.nik as nik',
        ])
        ->orderBy('tb_iuran.id', 'DESC')->get();
        if ($user->isEmpty() && $iuran->isEmpty()) {
            return abort(404);
        } else {
            return View('pages.admin.iuran', compact(['user','iuran']));
        }

    }

    public function tambahIuran(Request $request)
    {
        $val = Validator::make($request->all(),[
            'id_user' => 'required',
            'tahun' => 'required|max:4|min:4',
            'bulan' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        if ($val->fails()) {
            return 'gagal';
        } else {
            DB::table('tb_iuran')->insert([
                'id_user' => $request->id_user,
                'tahun' => $request->tahun,
                'bulan' => $request->bulan,
                'jumlah' => $request->jumlah,
                'created_at' => Carbon::now(),
            ]);

            return redirect('/admin/iuran');
        }

    }

    public function pengajuan()
    {
        $data = DB::table('tb_pengajuan')->get();
        return View('pages.admin.pengajuan',compact('data'));
    }
}

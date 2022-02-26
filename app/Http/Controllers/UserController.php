<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return View('pages.users.index');
    }

    public function tambahPengajuan()
    {
        return View('pages.users.pengajuan');
    }

    public function tambahDataPengajuan(Request $request)
    {
        $val = Validator::make($request->all(),[
            'nama'=>'required',
            'nik'=>'required|min:16|max:16',
            'kk' => 'required',
            'surat_kematian' => 'required',
        ]);
        if ($val->fails()) {
            return 'gagal';
        } else {

            DB::table('tb_pengajuan')->insert([
                'id_user' => Auth::user()->id,
                'nama' => $request->nama,
                'nik' => $request->nik,
                'kk' => $request->kk,
                'created_at' => Carbon::now(),
            ]);

            return redirect('/user/pengajuan');
        }
    }

    public function pengajuan()
    {
        $data = DB::table('tb_pengajuan')->where('id_user',Auth::user()->id)->get();
        return view('pages.users.cek_pengajuan',compact('data'));
    }
}

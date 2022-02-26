<?php

use Illuminate\Support\Facades\DB;

class Helper{
    public static function tanggal($data)
    {
        {
            $tgl = explode(' ',$data);
            $bulan = explode('-',$tgl[0]);

            // dd($bulan[1]);

            switch ($bulan[1]) {
                case '01':
                    $moon = 'Januari';
                    break;
                case '02':
                    $moon = 'Februari';
                    break;
                case '03':
                    $moon = 'Maret';
                    break;
                case '04':
                    $moon = 'April';
                    break;
                case '05':
                    $moon = 'Mei';
                    break;
                case '06':
                    $moon = 'Juni';
                    break;
                case '07':
                    $moon = 'Juli';
                    break;
                case '08':
                    $moon = 'Agustus';
                    break;
                case '09':
                    $moon = 'September';
                    break;
                case '10':
                    $moon = 'Oktober';
                    break;
                case '11':
                    $moon = 'November';
                    break;
                case '12':
                    $moon = 'Desember';
                    break;

                default:
                    # code...
                    break;
            }

            return "$bulan[2]/$moon/$bulan[0]";
        }
    }

    public static function nama($data)
    {
        $data = DB::table('users')->where('id', $data)->get();
        if ($data->isEmpty()) {
            return 'Tidak terdefinisi';
        } else {
            return $data[0]->name;
        }

    }
}

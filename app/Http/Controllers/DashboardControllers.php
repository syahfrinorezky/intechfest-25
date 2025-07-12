<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardControllers extends Controller
{
    public function index()
    {

        Carbon::setLocale('id');
        $hariIni = Carbon::now()->format('l, d F Y');

        /* ----------  Lomba DC, WDC, CTF (Sudah Valid)  ---------- */
        $jumlahDC  = DB::table('dc')
            ->where('validasi', 'Sudah Valid')
            ->whereNull('deleted_at')
            ->count();

        $jumlahWDC = DB::table('wdc')
            ->where('validasi', 'Sudah Valid')
            ->whereNull('deleted_at')
            ->count();

        $jumlahCTF = DB::table('ctf')
            ->where('validasi', 'Sudah Valid')
            ->whereNull('deleted_at')
            ->count();

        /* ----------  ChillTalks (Sudah Valid)  ---------- */
        $ctBase = DB::table('ct')
            ->join('transaksi', 'ct.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Sudah Valid')
            ->whereNull('ct.deleted_at');

        // hitung per sesi yak
        $jumlahCTOffline = (clone $ctBase)->where('ct.sesi', 'Offline')->count();
        $jumlahCTOnline  = (clone $ctBase)->where('ct.sesi', 'Online')->count();


        /* ----------  Lomba DC, WDC, CTF (Belum Valid)  ---------- */
        $jumlahDC_belumvalid  = DB::table('dc')
            ->where('validasi', 'Belum Tervalidasi')
            ->whereNull('deleted_at')
            ->count();

        $jumlahWDC_belumvalid = DB::table('wdc')
            ->where('validasi', 'Belum Tervalidasi')
            ->whereNull('deleted_at')
            ->count();

        $jumlahCTF_belumvalid = DB::table('ctf')
            ->where('validasi', 'Belum Tervalidasi')
            ->whereNull('deleted_at')
            ->count();

        /* ----------  ChillTalks (Belum Tervalidasi)  ---------- */
        $ctBase = DB::table('ct')
            ->join('transaksi', 'ct.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Belum Tervalidasi')
            ->whereNull('ct.deleted_at');

        // hitung per sesi yak
        $jumlahCTOffline_belumvalid = (clone $ctBase)->where('ct.sesi', 'Offline')->count();
        $jumlahCTOnline_belumvalid  = (clone $ctBase)->where('ct.sesi', 'Online')->count();

        /* ----------  Transaksi DC, WDC, CTF (Belum Valid)  ---------- */
        $transaksiDC_belumvalid = DB::table('dc')
            ->join('transaksi', 'dc.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Belum Tervalidasi')
            ->whereNull('dc.deleted_at')
            ->count();

        $transaksiWDC_belumvalid = DB::table('wdc')
            ->join('transaksi', 'wdc.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Belum Tervalidasi')
            ->whereNull('wdc.deleted_at')
            ->count();

        $transaksiCTF_belumvalid = DB::table('ctf')
            ->join('transaksi', 'ctf.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Belum Tervalidasi')
            ->whereNull('ctf.deleted_at')
            ->count();
        
        /* ----------  Transaksi DC, WDC (Sudah Valid)  ---------- */
        $transaksiDC = DB::table('dc')
            ->join('transaksi', 'dc.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Sudah Valid')
            ->whereNull('dc.deleted_at')
            ->count();
        
        $transaksiWDC = DB::table('wdc')
            ->join('transaksi', 'wdc.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Sudah Valid')
            ->whereNull('wdc.deleted_at')
            ->count();

        $transaksiCTF = DB::table('ctf')
            ->join('transaksi', 'ctf.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Sudah Valid')
            ->whereNull('ctf.deleted_at')
            ->count();

        $jumlahSemuaDC = $this->jumlahSemua('dc');
        $jumlahSemuaWDC = $this->jumlahSemua('wdc');
        $jumlahSemuaCTF = $this->jumlahSemua('ctf');

        return view('panitia.content.dashboard', compact(
            'hariIni',
            'jumlahDC',
            'jumlahWDC',
            'jumlahCTF',
            'jumlahCTOffline',
            'jumlahCTOnline',
            'jumlahDC_belumvalid',
            'jumlahWDC_belumvalid',
            'jumlahCTF_belumvalid',
            'jumlahCTOffline_belumvalid',
            'jumlahCTOnline_belumvalid',
            'transaksiWDC',
            'transaksiCTF',
            'transaksiDC',
            'transaksiDC_belumvalid',
            'transaksiWDC_belumvalid',
            'transaksiCTF_belumvalid',
            'jumlahSemuaDC',
            'jumlahSemuaWDC',
            'jumlahSemuaCTF',
        ));
    }

    public function jumlahSemua($table) {
        return [
        'lolos' => DB::table($table)
            ->join('transaksi', "$table.id_transaksi", '=', 'transaksi.id_transaksi')
            ->where("$table.validasi", 'Sudah Valid')
            ->where('transaksi.validasi', 'Sudah Valid')
            ->whereNull("$table.deleted_at")
            ->distinct()
            ->count("$table.id_peserta"),

        'proses' => DB::table($table)
            ->join('transaksi', "$table.id_transaksi", '=', 'transaksi.id_transaksi')
            ->where(function ($query) use ($table) {
                $query  ->where("$table.validasi", '!=', 'Sudah Valid')
                        ->orWhere('transaksi.validasi', '!=', 'Sudah Valid');
            })
            ->whereNull("$table.deleted_at")
            ->distinct()
            ->count("$table.id_peserta")
    ];
    }
}

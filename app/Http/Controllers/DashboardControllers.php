<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardControllers extends Controller
{
    public function index()
    {
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



        return view('panitia.content.dashboard', compact(
            'jumlahDC',
            'jumlahWDC',
            'jumlahCTF',
            'jumlahCTOffline',
            'jumlahCTOnline',
            'jumlahDC_belumvalid',
            'jumlahWDC_belumvalid',
            'jumlahCTF_belumvalid',
            'jumlahCTOffline_belumvalid',
            'jumlahCTOnline_belumvalid'
        ));
    }
}

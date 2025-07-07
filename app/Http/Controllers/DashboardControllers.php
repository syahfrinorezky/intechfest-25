<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardControllers extends Controller
{
    public function index()
    {
        /* ----------  Lomba DC, WDC, CTF  ---------- */
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

        /* ----------  ChillTalks  ---------- */
        $ctBase = DB::table('ct')
            ->join('transaksi', 'ct.id_transaksi', '=', 'transaksi.id_transaksi')
            ->where('transaksi.validasi', 'Sudah Valid')
            ->whereNull('ct.deleted_at');

        // hitung per sesi yak
        $jumlahCTOffline = (clone $ctBase)->where('ct.sesi', 'Offline')->count();
        $jumlahCTOnline  = (clone $ctBase)->where('ct.sesi', 'Online')->count();

        return view('panitia.content.dashboard', compact(
            'jumlahDC',
            'jumlahWDC',
            'jumlahCTF',
            'jumlahCTOffline',
            'jumlahCTOnline'
        ));
    }
}

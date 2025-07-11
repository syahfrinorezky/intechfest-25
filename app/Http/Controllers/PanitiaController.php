<?php

namespace App\Http\Controllers;

use File;

use ZipArchive;
use App\Models\Ct;
use App\Models\Dc;
use App\Models\Ctf;
use App\Models\Wdc;
use App\Models\Content;
use App\Models\Panitia;
use App\Models\Project;
use App\Exports\CtExcel;
use App\Exports\DcExcel;
use App\Exports\CtfExcel;
use App\Exports\WdcExcel;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class PanitiaController extends Controller
{
    public function index()
    {
        Auth::user();
        return view('panitia.content.dashboard');
    }

// CT ============================================================
    // halaman utama chilltalks
    public function ct(Request $request)
    {
        // MENDAPAKATKAN REQUEST SEARCH
        $search = $request->search;

        // CEK JIKA SEARCH = TRUE
        // if($search){
        //     $ct = Ct::          
        //     join('peserta', 'ct.id_peserta', '=', 'peserta.id_peserta')
        //     ->join('transaksi', 'ct.id_transaksi', '=', 'transaksi.id_transaksi')
        //     ->select('ct.*', 'peserta.*', 'transaksi.foto AS foto_transaksi')
        //     ->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
        //     ->paginate();    
        // }else{
        //     $ct = Ct::          
        //     join('peserta', 'ct.id_peserta', '=', 'peserta.id_peserta')
        //     ->leftJoin('transaksi', 'ct.id_transaksi', '=', 'transaksi.id_transaksi')
        //     ->select('ct.*', 'peserta.*', 'transaksi.foto AS foto_transaksi')
        //     ->paginate(15);    
        // }

        if($search){
            $ct = CT::with(['peserta', 'transaksi'])
            ->where(function ($query) use ($search) {
                $query->whereHas('peserta', function ($query) use ($search) {
                    $query->where('nama_lengkap', 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%');
                })
                ->orWhereHas('transaksi', function ($query) use ($search) {
                    $query->where('validasi', 'LIKE', '%' . $search . '%');
                });
            })
            ->paginate();
        }else{
            $ct = CT::with(['peserta', 'transaksi']) 
            ->paginate(15);
        }

        return view('panitia.chilltalk.dashct', compact(['ct']));
    }
    // Delete ct
    public function delete_ct(Request $request)
    {
        $data = Ct::findOrFail($request['id_ct']);
        $data->delete();
        toast('Data berhasil di hapus','success');
        return redirect()->back();        
    }
    // Export Excel
    public function ctExportExcel()
	{
		return Excel::download(new CtExcel, 'Chilltalks.xlsx');
	}

// WDC ===========================================================

    // halaman wdc
    public function wdc(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        // mengambil kolom kecuali update dan create
        // $pesertaColumns = array_diff(Schema::getColumnListing('peserta'), ['created_at', 'updated_at']);
        // $pesertaColumns = array_map(function($column) {
        //     return 'peserta.' . $column;
        // }, $pesertaColumns);

        // if($search){
        //     $wdc = Wdc::          
        //     join('peserta', 'wdc.id_peserta', '=', 'peserta.id_peserta')
        //     ->leftJoin('project', 'wdc.id_project', '=', 'project.id_project')
        //     ->select('wdc.*', 'peserta.*', 'project.file_project')
        //     ->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
        //     ->paginate();    
        // }else{
        //     $wdc = Wdc::          
        //     join('peserta', 'wdc.id_peserta', '=', 'peserta.id_peserta')
        //     ->leftJoin('project', 'wdc.id_project', '=', 'project.id_project')
        //     ->select('wdc.*', 'peserta.*', 'project.file_project')
        //     ->paginate(15);             
        // }

        if($search){
            $wdc = Wdc::with(['peserta', 'project'])
            ->whereHas('peserta', function($query) use ($search) {
                $query->where('nama_lengkap', 'LIKE', '%' . $search . '%');
                $query->orWhere('email', 'LIKE', '%' . $search . '%');
                $query->Orwhere('validasi', 'LIKE', '%' . $search . '%');
            })
            ->paginate(); 
        }else{
            $wdc = Wdc::with(['peserta', 'project']) 
            ->paginate(15);    
        }

        return view('panitia.wdc.dashwdc', compact(['wdc']));   
    }
    // delete wdc
    public function delete_wdc(Request $request)
    {      
        $data = Wdc::findOrFail($request['id_wdc']);
        $data->delete();
        toast('Data berhasil di hapus','success');
        return redirect()->back();        
    }   
    // Update Wdc
    public function update_wdc(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'id_wdc' => 'required',
                'validasi' => 'required',
            ]);
            
            // $data = $request->all();
            Wdc::where(['id_wdc' => $request->id_wdc])->update([
                'id_wdc'=>$request->id_wdc, 
                'validasi'=>$request->validasi, 
        ]);
            toast('Data berhasil di validasi','success');
            return redirect()->back();
        }
    }

    // Export Excel
    public function wdcExportExcel()
	{
		return Excel::download(new WdcExcel, 'Wdc.xlsx');
	}


// DC ========================================================== 

    // halaman dc
    public function dc(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        // // mengambil kolom kecuali update dan create
        // $pesertaColumns = array_diff(Schema::getColumnListing('peserta'), ['created_at', 'updated_at']);
        // $pesertaColumns = array_map(function($column) {
        //     return 'peserta.' . $column;
        // }, $pesertaColumns);

        // if($search){
        //     $dc = Dc::          
        //     join('peserta', 'dc.id_peserta', '=', 'peserta.id_peserta')
        //     ->leftJoin('project', 'dc.id_project', '=', 'project.id_project')
        //     ->select(array_merge(['dc.*', 'project.file_project'], $pesertaColumns))
        //     ->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
        //     ->paginate(); 
        // }else{
        //     $dc = Dc::          
        //     rightJoin('peserta', 'dc.id_peserta', '=', 'peserta.id_peserta')
        //     ->leftJoin('project', 'dc.id_project', '=', 'project.id_project')
        //     ->select(array_merge(['dc.*', 'project.file_project'], $pesertaColumns))
        //     ->paginate(15);    
        // }
        if($search){
            $dc = Dc::with(['peserta', 'project'])
            ->whereHas('peserta', function($query) use ($search) {
                $query->where('nama_lengkap', 'LIKE', '%' . $search . '%');
                $query->orWhere('email', 'LIKE', '%' . $search . '%');
                $query->Orwhere('validasi', 'LIKE', '%' . $search . '%');
            })
            ->paginate(); 
        }else{
            $dc = Dc::with(['peserta', 'project']) 
            ->paginate(15);    
        }

        return view('panitia.dc.dashdc', compact(['dc']));
    }
    // menghapus
    public function delete_dc(Request $request)
    { 
        $data = Dc::findOrFail($request['id_dc']);
        $data->delete();
        toast('Data berhasil di hapus','success');
        return redirect()->back();   
    }
    // Update Dc
    public function update_dc(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'id_dc' => 'required',
                'validasi' => 'required',
            ]);
            
            Dc::where(['id_dc' => $request->id_dc])->update([
                'id_dc'=>$request->id_dc, 
                'validasi'=>$request->validasi, 
        ]);
            toast('Data berhasil di validasi','success');
            return redirect()->back();
        }
    }

    // Export Excel
    public function DcExportExcel()
	{
		return Excel::download(new DcExcel, 'Dc.xlsx');
	}

// CTF =========================================================

    // halaman ctf
    public function ctf(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        // mengambil kolom kecuali update dan create
        // $pesertaColumns = array_diff(Schema::getColumnListing('peserta'), ['created_at', 'updated_at']);
        // $pesertaColumns = array_map(function($column) {
        //     return 'peserta.' . $column;
        // }, $pesertaColumns);

        // if($search){
        //     $ctf = Ctf::          
        //     join('peserta', 'ctf.id_peserta', '=', 'peserta.id_peserta')
        //     ->select('ctf.*', 'peserta.*')
        //     ->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
        //     ->paginate();
        // }else{
        //     $ctf = Ctf::          
        //     join('peserta', 'ctf.id_peserta', '=', 'peserta.id_peserta')
        //     ->select('ctf.*', 'peserta.*')
        //     ->paginate(15);    
        // }

        if($search){
            $ctf = Ctf::with(['peserta'])
            ->whereHas('peserta', function($query) use ($search) {
                $query->where('nama_lengkap', 'LIKE', '%' . $search . '%');
                $query->orWhere('email', 'LIKE', '%' . $search . '%');
                $query->Orwhere('validasi', 'LIKE', '%' . $search . '%');
            })
            ->paginate(); 
        }else{
            $ctf = Ctf::with(['peserta']) 
            ->paginate(15);    
        }

        return view('panitia.ctf.dashctf', compact(['ctf']));
    }
    public function delete_ctf(Request $request)
    {
        $data = Ctf::findOrFail($request['id_ctf']);
        $data->delete();
        toast('Data berhasil di hapus','success');
        return redirect()->back(); 
    }
    // Update Ctf
    public function update_ctf(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'id_ctf' => 'required',
                'validasi' => 'required',
            ]);
            
            $data = $request->all();
            Ctf::where(['id_ctf' => $request->id_ctf])->update([
                'id_ctf'=>$data['id_ctf'], 
                'validasi'=>$data['validasi'], 
        ]);
        toast('Data berhasil di update','success');
            return redirect()->back();
        }
    }

    // Export Excel
    public function CtfExportExcel()
	{
		return Excel::download(new CtfExcel, 'Ctf.xlsx');
	}

// TRANSAKSI ===================================================

    // halaman transaksi
    public function transaksiWdc(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        // mendapatkan data Panitia
        $user = Auth::user();
        $panitia = Panitia::where('email_panitia', $user->email)->first()->id_panitia;
        
        if($search){
            $transaksi = Transaksi::
            join('wdc', 'transaksi.id_transaksi', '=', 'wdc.id_transaksi')
            ->join('peserta', 'wdc.id_peserta', '=', 'peserta.id_peserta')
            ->leftjoin('panitia', 'transaksi.id_panitia', '=', 'panitia.id_panitia')
            ->select('transaksi.*', 'peserta.nama_lengkap AS nama_peserta', 'panitia.nama_lengkap AS nama_panitia', 'peserta.no_hp AS no_hp')
            ->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
            ->orWhere('peserta.email','LIKE','%'.$search.'%')
            ->orWhere('transaksi.validasi','LIKE','%'.$search.'%')
            ->wherenull('wdc.deleted_at')
            ->paginate();
        }else{
            $transaksi = Transaksi::
            join('wdc', 'transaksi.id_transaksi', '=', 'wdc.id_transaksi')
            ->join('peserta', 'wdc.id_peserta', '=', 'peserta.id_peserta')
            ->leftjoin('panitia', 'transaksi.id_panitia', '=', 'panitia.id_panitia')
            ->select('transaksi.*', 'peserta.nama_lengkap AS nama_peserta', 'panitia.nama_lengkap AS nama_panitia', 'peserta.no_hp AS no_hp')
            ->wherenull('wdc.deleted_at')
            ->paginate(15);
        }

        return view('panitia.transaksi.dashtransaksiwdc', compact(['transaksi', 'panitia']));
    }

    public function transaksiDc(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        // mendapatkan data Panitia
        $user = Auth::user();
        $panitia = Panitia::where('email_panitia', $user->email)->first()->id_panitia;

        if($search){
            $transaksi = Transaksi::
            join('dc', 'transaksi.id_transaksi', '=', 'dc.id_transaksi')
            ->join('peserta', 'dc.id_peserta', '=', 'peserta.id_peserta')
            ->leftjoin('panitia', 'transaksi.id_panitia', '=', 'panitia.id_panitia')
            ->select('transaksi.*', 'peserta.nama_lengkap AS nama_peserta', 'panitia.nama_lengkap AS nama_panitia', 'peserta.no_hp AS no_hp')
            ->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
            ->orWhere('peserta.email','LIKE','%'.$search.'%')
            ->orWhere('transaksi.validasi','LIKE','%'.$search.'%')
            ->wherenull('dc.deleted_at')
            ->paginate();
        }else{
            $transaksi = Transaksi::
            join('dc', 'transaksi.id_transaksi', '=', 'dc.id_transaksi')
            ->join('peserta', 'dc.id_peserta', '=', 'peserta.id_peserta')
            ->leftjoin('panitia', 'transaksi.id_panitia', '=', 'panitia.id_panitia')
            ->select('transaksi.*', 'peserta.nama_lengkap AS nama_peserta', 'panitia.nama_lengkap AS nama_panitia', 'peserta.no_hp AS no_hp')
            ->wherenull('dc.deleted_at')
            ->paginate(15);
        }

        return view('panitia.transaksi.dashtransaksidc', compact(['transaksi', 'panitia']));
    }
    public function transaksiCtf(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        // mendapatkan data Panitia
        $user = Auth::user();
        $panitia = Panitia::where('email_panitia', $user->email)->first()->id_panitia;


        if($search){
            $transaksi = Transaksi::
            join('ctf', 'transaksi.id_transaksi', '=', 'ctf.id_transaksi')
            ->join('peserta', 'ctf.id_peserta', '=', 'peserta.id_peserta')
            ->leftjoin('panitia', 'transaksi.id_panitia', '=', 'panitia.id_panitia')
            ->select('transaksi.*', 'peserta.nama_lengkap AS nama_peserta', 'panitia.nama_lengkap AS nama_panitia', 'peserta.no_hp AS no_hp')
            ->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
            ->orWhere('peserta.email','LIKE','%'.$search.'%')
            ->orWhere('transaksi.validasi','LIKE','%'.$search.'%')
            ->wherenull('ctf.deleted_at')
            ->paginate();
        }else{
            $transaksi = Transaksi::
            join('ctf', 'transaksi.id_transaksi', '=', 'ctf.id_transaksi')
            ->join('peserta', 'ctf.id_peserta', '=', 'peserta.id_peserta')
            ->leftjoin('panitia', 'transaksi.id_panitia', '=', 'panitia.id_panitia')
            ->select('transaksi.*', 'peserta.nama_lengkap AS nama_peserta', 'panitia.nama_lengkap AS nama_panitia', 'peserta.no_hp AS no_hp')
            ->wherenull('ctf.deleted_at')
            ->paginate(15);
        }

        return view('panitia.transaksi.dashtransaksictf', compact(['transaksi', 'panitia']));
    }
    public function transaksiCt(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        // mendapatkan data Panitia
        $user = Auth::user();
        $panitia = Panitia::where('email_panitia', $user->email)->first()->id_panitia;


        if($search){
            $transaksi = Transaksi::
            join('ct', 'transaksi.id_transaksi', '=', 'ct.id_transaksi')
            ->join('peserta', 'ct.id_peserta', '=', 'peserta.id_peserta')
            ->leftjoin('panitia', 'transaksi.id_panitia', '=', 'panitia.id_panitia')
            ->select('transaksi.*', 'peserta.nama_lengkap AS nama_peserta', 'panitia.nama_lengkap AS nama_panitia', 'peserta.no_hp AS no_hp', 'ct.sesi AS sesi_peserta')
            ->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
            ->orWhere('peserta.email','LIKE','%'.$search.'%')
            ->orWhere('transaksi.validasi','LIKE','%'.$search.'%')
            ->wherenull('ct.deleted_at')
            ->paginate();
        }else{
            $transaksi = Transaksi::
            join('ct', 'transaksi.id_transaksi', '=', 'ct.id_transaksi')
            ->join('peserta', 'ct.id_peserta', '=', 'peserta.id_peserta')
            ->leftjoin('panitia', 'transaksi.id_panitia', '=', 'panitia.id_panitia')
            ->select('transaksi.*', 'peserta.nama_lengkap AS nama_peserta', 'panitia.nama_lengkap AS nama_panitia', 'peserta.no_hp AS no_hp', 'ct.sesi AS sesi_peserta')
            ->wherenull('ct.deleted_at')
            ->paginate(15);
        }

        return view('panitia.transaksi.dashtransaksict', compact(['transaksi', 'panitia']));
    }
    // delete Transaksi
    public function delete_transaksi(Request $request)
    {
        try {
            DB::beginTransaction();

            Transaksi::findOrFail($request->id_transaksi)->delete();
        
            // Update user's balance
            Ct::where('id_transaksi', $request->id_transaksi)->delete();
        
            DB::commit();

            toast('Data berhasil di hapus','success');
            return redirect()->back(); 
        } catch (\Exception $e) {
            report($e);
            
            DB::rollBack();
        }

        // $data = Transaksi::findOrFail($request['id_transaksi']);
        // $data->delete();
          
    }
    // update transaksi
    public function update_transaksi(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'id_panitia' => 'required',
                'validasi' => 'required',
            ]);
            
            $data = $request->all();
            Transaksi::where(['id_transaksi' => $request->id_transaksi])->update([
                'id_panitia'=>$data['id_panitia'], 
                'validasi'=>$data['validasi'], 
            ]);
            toast('Data berhasil di validasi','success');
            return redirect()->back();
        }
    }

// PROJECT =====================================================

    // Manampilkan Halaman Project Lomba WDC
    public function projectWdc(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        if($search){
            $projectwdc = Project::
            join('wdc', 'project.id_project', '=', 'wdc.id_project')
            ->join('peserta', 'wdc.id_peserta', '=', 'peserta.id_peserta')
            ->select('project.*', 'peserta.*')
            ->whereNotNull('wdc.id_project')
            ->whereNotNull('file_project') 
            ->where('file_project', 'LIKE', 'WDC%')
            ->where(function($query) use ($search) {  
                $query->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
                    ->orWhere('peserta.email','LIKE','%'.$search.'%');  
                })
            ->distinct()     
            ->paginate();
        }else{
            $projectwdc = Project::
            join('wdc', 'project.id_project', '=', 'wdc.id_project')
            ->join('peserta', 'wdc.id_peserta', '=', 'peserta.id_peserta')
            ->select('project.*', 'peserta.*')
            ->whereNotNull('wdc.id_project')
            ->whereNotNull('file_project') 
            ->where('file_project', 'LIKE', 'WDC%')  
            ->distinct()
            ->paginate(15);    
        }

        return view('panitia.project.dashprojectwdc', compact(['projectwdc']));
    }

    public function projectDc(Request $request)
    {
        // MENDAPATKAN REQUEST SEARCH
        $search = $request->search;

        if($search){
            $projectdc = Project::
            join('dc', 'project.id_project', '=', 'dc.id_project')
            ->join('peserta', 'dc.id_peserta', '=', 'peserta.id_peserta')
            ->select('project.*', 'peserta.*')
            ->where('file_project', 'LIKE', 'DC%')
            ->whereNotNull('dc.id_project')
            ->whereNotNull('file_project')
            ->where(function($query) use ($search) {  // 
                $query->where('peserta.nama_lengkap','LIKE','%'.$search.'%')
                    ->orWhere('peserta.email','LIKE','%'.$search.'%');  
                })
            ->distinct()     
            ->paginate();
        }else{
            $projectdc = Project::
            join('dc', 'project.id_project', '=', 'dc.id_project')
            ->join('peserta', 'dc.id_peserta', '=', 'peserta.id_peserta')
            ->select('project.*', 'peserta.*')
            ->where('file_project', 'LIKE', 'DC%')
            ->whereNotNull('dc.id_project')
            ->whereNotNull('file_project')
            ->distinct() 
            ->paginate(15);    
        }

        return view('panitia.project.dashprojectdc', compact(['projectdc']));
    }

    // DOWNLOAD PROJECT WDC SATU SATU
    function downloadProjectWDC($file_name){
        $file = Storage::download("public/Project/wdc/".$file_name);  
        return $file;
    }

    // DOWNLOAD PROJECT DC SATU SATU
    function downloadProjectDC($file_name){
        $file = Storage::download("public/Project/dc/".$file_name);  
        return $file;
    }

     // DOWNLOAD SEMUA PROJECT LOMBA WDC
    //  function downloadAllProjectWDC()
    //  {
    //      // memanggil object zip archive dari laravel yang disimpan ke variabel
    //      $zip = new ZipArchive;
     
    //      // membuat nama file yang nantinya akan di download
    //      $fileName = 'ProjectWDC.zip';
      
    //      // mendeklarasikan path yang akan di download
    //      $path = public_path('storage/Project/wdc');
 
    //      // cek jika variabel yang berisi object filearchive tadi berjalan dan membuat file zip
    //      if ($zip->open(public_path('storage/'.$fileName), ZipArchive::CREATE) === TRUE)
    //      {
    //          // mengambil file file yang ada di path
    //          $files = File::files($path);
 
    //          // perulangan untuk mengambil setiap file yang ada di path
    //          foreach ($files as $key => $value) {
    //              // mengambil nama file dari path lengkap filenya
    //              $relativeNameInZipFile = basename($value);
    //              // menambah file ke dalam zip
    //              $zip->addFile($value, $relativeNameInZipFile);
    //          }
                
    //          $zip->close();
    //      }
         
    //      // fucntion mereturn response yang mendownload zip tadi
    //      return response()->download(public_path('storage/'.$fileName));
    //  }
     
     /// DOWNLOAD SEMUA PROJECT LOMBA DC
    //  function downloadAllProjectDC()
    //  {
    //      // memanggil object zip archive dari laravel yang disimpan ke variabel
    //      $zip = new ZipArchive;
     
    //      // membuat nama file yang nantinya akan di download
    //      $fileName = 'ProjectDC.zip';
         
    //      // mendeklarasikan path yang akan di download
    //      $path = public_path('storage/Project/dc');
 
    //      // cek jika variabel yang berisi object filearchive tadi berjalan dan membuat file zip
    //      if ($zip->open(public_path('storage/'.$fileName), ZipArchive::CREATE) === TRUE)
    //      {
    //          // mengambil file file yang ada di path
    //          $files = File::files($path);
 
    //          // perulangan untuk mengambil setiap file yang ada di path
    //          foreach ($files as $key => $value) {
    //              // mengambil nama file dari path lengkap filenya
    //              $relativeNameInZipFile = basename($value);
    //              // menambah file ke dalam zip
    //              $zip->addFile($value, $relativeNameInZipFile);
    //          }
                 
    //          $zip->close();
    //      }
         
    //      // fucntion mereturn response yang mendownload zip tadi
    //      return response()->download(public_path('storage/'.$fileName));
    //  }

}
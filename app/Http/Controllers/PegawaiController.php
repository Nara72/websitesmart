<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel 'pegawai'
        $pegawai = Pegawai::all();
        // Kirim data ke view 'pegawai.index'
        return view('admin.dashboard', compact('pegawai'));
    }

    public function tambahdata(){
        return view("/admin/tambahdata");
    }

    public function insertdata(Request $request){
        Pegawai::create($request->all());
        return redirect()->route('admin.dashboard');
    }

    public function editdata($id){
        $data = Pegawai::find($id);
        return view('/admin/editdata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Pegawai::find($id);
        $data->update($request->all());
        return redirect()->route('admin.dashboard');
    }

    public function delete($id){
        $data = Pegawai::find($id);
        $data->delete();
        return redirect()->route('admin.dashboard'); 
    }

    public function dataser(Request $request)
    {
    $data = collect(); // Awalnya kosong
    $search = $request->search;

    // Jika ada kata kunci pencarian, lakukan pencarian
    if ($request->has('search') && $request->search !== '') {
        $data = Pegawai::whereRaw('BINARY `kode` = ?', [$search])->paginate(10);
    }

    return view('dataser', compact('data', 'search'));
    } 
    
   

}
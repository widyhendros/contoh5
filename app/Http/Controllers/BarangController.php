<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(){
        $barang = DB::table('barang')->select('barang.*','jenis_barang.nama_jenis_barang')->join('jenis_barang','jenis_barang.id','barang.id_jenis_barang')->get();
        return view('barang.index', ['barang_v' => $barang]);
    }

    public function tambah_barang(){
        $jenis_barang = DB::table('jenis_barang')->get();
        return view('barang.tambah', ['jenis_barang_v' => $jenis_barang]);
    }

    public function store(Request $request){
        $data = [
            "nama_barang"=>$request->nama_barang,
            "harga_barang"=>$request->harga_barang,
            "id_jenis_barang"=>$request->id_jenis_barang
        ];

        $query= DB::table('barang')->insert($data);
    if ($query == 1){
        return redirect('/barang')->with("success","berhasil di tambahkan");
        
    }else{
        return redirect('/barang')->with("error", "gagal di tambahkan");
    }
    }

    public function delete($id){
        $query = DB::table('barang')->where('id',$id)->delete();
        if ($query == 1){
        return redirect('/barang')->with("success","berhasil di hapus");
        
    }else{
        return redirect('/barang')->with("error", "gagal di hapus");
    }
    }

    public function edit_barang($id_variable){
        $jenis_barang = DB::table('jenis_barang')->get();
        $detail_barang = DB::table('barang')->where('id',$id_variable)->get();
        return view('barang.edit', ['jenis_barang_v' => $jenis_barang,'detail_barang_v' => $detail_barang]);
    }
    
    public function update(Request $request,$id_variable){
        $data_update = [
            "nama_barang"=>$request->nama_barang,
            "harga_barang"=>$request->harga_barang,
            "id_jenis_barang"=>$request->id_jenis_barang
        ];
        $query= DB::table('barang')->where('id',$id_variable)->update($data_update);
        if ($query == 1){
        return redirect('/barang')->with("success","berhasil di ubah");
        
    }else{
        return redirect('/barang')->with("error", "gagal di ubah");
    }
    }
}

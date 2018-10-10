<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WajibPajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $wajibpajak = DB::select("select * from wajib_pajak");
        return view("admin.wajibpajak", ['datawajibpajak' => $wajibpajak]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nik=$request->nik;
        $nama=$request->nama;
        $alamat=$request->alamat;
        $alamat_desa=$request->alamat_desa;
        $alamat_kec=$request->alamat_kec;
        DB::table('wajib_pajak')->insert(['NIK' => $nik, 'Nama' => $nama,'Alamat'=>$alamat,'Alamat_desa'=>$alamat,'Alamat_kecamatan'=>$alamat_kec]);
        return redirect('wajib_pajak')->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          $wajibpajak = DB::select("select * from wajib_pajak where id=:id",['id'=>decrypt($id)]);
        return view("admin.editWajibPajak", ['datawajibpajak' => $wajibpajak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nik=$request->nik;
        $nama=$request->nama;
        $alamat=$request->alamat;
        $alamat_desa=$request->alamat_desa;
        $alamat_kec=$request->alamat_kec;
        DB::select('update wajib_pajak set NIK=:nik,Nama=:nama,Alamat=:alamat,Alamat_desa=:alamat_desa,Alamat_kecamatan=:alamat_kec where id=:id',['nik'=>$nik,'nama'=>$nama,'alamat'=>$alamat,'alamat_desa'=>$alamat_desa,'alamat_kec'=>$alamat_kec,'id'=>decrypt($id)]);
        return redirect('wajib_pajak')->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $wajibpajak = DB::select("delete from wajib_pajak where id=:id",['id'=>decrypt($id)]);
         return redirect('wajib_pajak')->with('message', 'Data Berhasil Disimpan');
    }
}

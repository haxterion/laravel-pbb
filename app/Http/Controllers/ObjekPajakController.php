<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjekPajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objekpajak1 =DB::select("SELECT * FROM objek_pajak");
        $dataprovinsi = DB::select("SELECT * FROM `provinsi`");
        $datakabupaten = DB::select("SELECT * FROM kabupaten ");
        $datakecamatan= DB::select("SELECT * FROM kecamatan ");
        $datakelurahan= DB::select("SELECT * FROM kelurahan ");
        return view("admin.objekpajak",['dataprovinsi'=>$dataprovinsi,'datakabupaten'=>$datakabupaten,'datakecamatan'=>$datakecamatan,'datakelurahan'=>$datakelurahan,'dataobjekpajak'=>$objekpajak1]);
            
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
        $kd_provinsi=$request->kd_provinsi;
        $kd_dati=$request->kd_dati;
        $kd_kec=$request->kd_kec;
        $kd_kel=$request->kd_kel;
        $kd_blok=$request->kd_blok;
        $kd_urut=$request->kd_urut;
        $kd_jenis_op=$request->kd_jenis_op;
        $luas_bumi=$request->luas_bumi;
        $njob_bumi=$request->njob_bumi;
        $luas_bgn=$request->luas_bgn;
        $njob_bgn=$request->njob_bgn;
        $njob_pbb=$request->njob_pbb;
        $pbb=$request->pbb;
        DB::table('objek_pajak')->insert(['Kd_prop'=>$kd_provinsi,'Kd_dati2'=>$kd_dati,'Kd_kecamatan'=>$kd_kec,'Kd_kelurahan'=>$kd_kel,'Kd_blok'=>$kd_blok,
            'No_urut'=>$kd_urut,'Kd_jns_op'=>$kd_jenis_op,'Luas_bumi'=>$luas_bumi,'Njop_bumi'=>$njob_bumi,'Luas_bangunan'=>$luas_bgn,'Njop_bangunan'=>$njob_bgn,'NJOP_pbb'=>$njob_pbb
                ,'PBB'=>$pbb]);
        return redirect('objekpajak')->with('message', 'Data Berhasil Disimpan');
        
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
        $datakabupaten1 = DB::select("SELECT * FROM kabupaten ");
        $datakecamatan1= DB::select("SELECT * FROM kecamatan ");
        $datakelurahan1= DB::select("SELECT * FROM kelurahan ");
        $dataprovinsi1 = DB::select("SELECT * FROM `provinsi`");
        $dataobjekpajak = DB::select("select * from objek_pajak where id=:id",['id'=>decrypt($id)]);
        return view("admin.editObjekPajak", ['dataobjekpajak' => $dataobjekpajak, 'dataprovinsi1' => $dataprovinsi1, 'datakabupaten1' => $datakabupaten1, 'dataprovinsi1' => $dataprovinsi1, 'datakecamatan1' => $datakecamatan1, 'datakelurahan1' => $datakelurahan1]);
          
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
         
    }
}

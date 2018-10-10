@extends('layouts.index')
@section('title','Dashboard')
@section('content')


<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Halaman Objek Pajak</h1>
                    </div>
                </div>
            </div>
</div>
<div class="content mt-3">
            <div class="col-md-12 col-sm-12">
                <div class="card rounded-top rounded-bottom">
                    <div class="card-header text-white" style="background: #8B189B">
                        <strong class="text-light">Form Objek Pajak</strong>
                    </div>
                    <div class="card-body">
                        @foreach($dataobjekpajak as $result)
                        <form action="{{ route('objekpajak.update',[encrypt($result->id)]) }}" method="post" enctype="Multipart/form-data">
                            {{csrf_field()}}
                            {{ method_field('PUT') }}
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode provinsi</label>
                                <select name="kd_provinsi" id="kd_provinsi" class="form-control" placeholder="Kode Provinsi">
                                 @foreach($dataprovinsi1 as $result1)    
                                    <option value="{{$result->Kd_prop}}">{{$result1->nama}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Dati</label>
                                <select name="kd_dati" id="kd_dati" class="form-control" placeholder="Kode Dati">
                                    @foreach($datakabupaten1 as $result1)
                                     <option value="{{$result->Kd_dati2}}" >{{$result1->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Kecamatan</label>
                                <select type="text" name="kd_kec" id="kd_kec" class="form-control" placeholder="Kode kecamatan">
                                    @foreach($datakecamatan1 as $result1) 
                                    <option value="{{$result->Kd_kecamatan}}" >{{$result1->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode kelurahan</label>
                                <select type="text" name="kd_kel" id="kd_kel" class="form-control" placeholder="Kode kelurahan">
                                    @foreach($datakelurahan1 as $result1)
                                    <option value="{{$result->Kd_kelurahan}}" >{{$result1->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Blok</label>
                                <input type="text" name="kd_blok" id="kd_blok" class="form-control" value="{{$result->Kd_blok}}" placeholder="Kode Blok">
                                    
                            </div>
                            <div class="form-group">
                                <label>Kode Urut</label>
                                <input type="text" name="kd_urut" id="kd_urut" class="form-control" value="{{$result->No_urut}}"placeholder="Kode Urut">
                            </div>
                                </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Jenis Op</label>
                                <input type="text" name="kd_jenis_op" id="kd_jenis_op" class="form-control" value="{{$result->Kd_jns_op}}" placeholder="Kode Jenis Op">
                            </div>
                            
                            <div class="form-group">
                                <label>Luas Bumi</label>
                                <input type="number" name="luas_bumi" id="luas_bumi" class="form-control" value="{{$result->Luas_bumi}}" placeholder="Luas Bumi" >
                            </div>
                            <div class="form-group">
                                <label>NJOB Bumi</label>
                                <input type="text" name="njob_bumi" id="njob_bumi" class="form-control" value="{{$result->Njop_bumi}}" placeholder="NJOB Bumi" >
                            </div>
                            <div class="form-group">
                                <label>Luas Bangunan</label>
                                <input type="text" name="luas_bgn" id="luas_bgn" class="form-control" value="{{$result->Luas_bangunan}}" placeholder="Luas Bangunan" >
                            </div>
                            <div class="form-group">
                                <label>NJOB Bangunan</label>
                                <input type="text" name="njob_bgn" id="njob_bgn" class="form-control" value="{{$result->Njop_bangunan}}" placeholder="NJOB Bangunan" >
                            </div>
                            <div class="form-group">
                                <label>NJOB PBB</label>
                                <input type="text" name="njob_pbb" id="njob_pbb" class="form-control" value="{{$result->NJOP_pbb}}" placeholder="NJOB PBB" >
                            </div>
                            <div class="form-group">
                                <label>PBB</label>
                                <input type="text" name="pbb" id="pbb" class="form-control" value="{{$result->PBB}}" placeholder="PBB" >
                            </div>
                            </div>
                            
                            
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-block rounded">Submit</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-danger btn-block rounded">Batal</a>
                                </div>
                            
                        </form>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
        @endsection
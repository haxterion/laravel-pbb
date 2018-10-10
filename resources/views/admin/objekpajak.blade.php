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
                        <form action="{{ route('objekpajak.store') }}" method="post" enctype="Multipart/form-data">
                            {{csrf_field()}}
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode provinsi</label>
                                <select name="kd_provinsi" id="kd_provinsi" class="form-control" placeholder="Kode Provinsi">
                                    @foreach($dataprovinsi as $result)
                                    <option value="{{$result->id_prov}}">{{$result->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Dati</label>
                                <select name="kd_dati" id="kd_dati" class="form-control" placeholder="Kode Dati">
                                     @foreach($datakabupaten as $result)
                                    <option value="{{$result->id_kab}}" >{{$result->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Kecamatan</label>
                                <select type="text" name="kd_kec" id="kd_kec" class="form-control" placeholder="Kode kecamatan">
                                     @foreach($datakecamatan as $result)
                                    <option value="{{$result->id_kec}}" >{{$result->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode kelurahan</label>
                                <select type="text" name="kd_kel" id="kd_kel" class="form-control" placeholder="Kode kelurahan">
                                     @foreach($datakelurahan as $result)
                                    <option value="{{$result->id_kel}}" >{{$result->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Blok</label>
                                <input type="text" name="kd_blok" id="kd_blok" class="form-control" placeholder="Kode Blok">
                                    
                            </div>
                            <div class="form-group">
                                <label>Kode Urut</label>
                                <input type="text" name="kd_urut" id="kd_urut" class="form-control" placeholder="Kode Urut">
                            </div>
                                </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Jenis Op</label>
                                <input type="text" name="kd_jenis_op" id="kd_jenis_op" class="form-control" placeholder="Kode Jenis Op">
                            </div>
                            
                            <div class="form-group">
                                <label>Luas Bumi</label>
                                <input type="number" name="luas_bumi" id="luas_bumi" class="form-control" placeholder="Luas Bumi" >
                            </div>
                            <div class="form-group">
                                <label>NJOB Bumi</label>
                                <input type="text" name="njob_bumi" id="njob_bumi" class="form-control" placeholder="NJOB Bumi" >
                            </div>
                            <div class="form-group">
                                <label>Luas Bangunan</label>
                                <input type="text" name="luas_bgn" id="luas_bgn" class="form-control" placeholder="Luas Bangunan" >
                            </div>
                            <div class="form-group">
                                <label>NJOB Bangunan</label>
                                <input type="text" name="njob_bgn" id="njob_bgn" class="form-control" placeholder="NJOB Bangunan" >
                            </div>
                            <div class="form-group">
                                <label>NJOB PBB</label>
                                <input type="text" name="njob_pbb" id="njob_pbb" class="form-control" placeholder="NJOB PBB" >
                            </div>
                            <div class="form-group">
                                <label>PBB</label>
                                <input type="text" name="pbb" id="pbb" class="form-control" placeholder="PBB" >
                            </div>
                            </div>
                            
                            
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-block rounded">Submit</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-danger btn-block rounded">Batal</a>
                                </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header" style="background: #8B189B">
                    </div>
                    <div class="card-body">

                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead class="bg-light">
                              <tr>
                                <th><font size="2">No</font></th>
                                <th><font size="2">Kode Provinsi</font></th>
                                <th><font size="2">Kode Dati</font></th>
                                <th><font size="2">Kode Kecamatan</font></th>
                                <th><font size="2">Kode Kelurahan</font></th>
                                <th><font size="2">Kode Blok</font></th>
                                <th><font size="2">No Urut</font></th>
                                <th><font size="2">Kode Jenis Op</font></th>
                                <th><font size="2">Luas Bumi</font></th>
                                <th><font size="2">NJOB Bumi</font></th>
                                <th><font size="2">Luas Bangunan</font></th>
                                <th><font size="2">NJOB Bangunan</font></th>
                                <th><font size="2">NJOB PBB</font></th>
                                <th><font size="2">PBB</font></th>
                                <th><font size="2">Opsi</font></th>
                              </tr>
                            </thead>
                            <tbody>
                                
                                    @foreach($dataobjekpajak as $nomor=>$result)
                                <tr>
                                    <td>{{$nomor+1}}</td>
                                    <td>{{$result->Kd_prop}}</td>
                                    <td>{{$result->Kd_dati2}}</td>
                                    <td>{{$result->Kd_kecamatan}}</td>
                                    <td>{{$result->Kd_kelurahan}}</td>
                                    <td>{{$result->Kd_blok}}</td>
                                    <td>{{$result->No_urut}}</td>
                                    <td>{{$result->Kd_jns_op}}</td>
                                    <td>{{$result->Luas_bumi}}</td>
                                    <td>{{$result->Njop_bumi}}</td>
                                    <td>{{$result->Luas_bangunan}}</td>
                                    <td>{{$result->Njop_bangunan}}</td>
                                    <td>{{$result->NJOP_pbb}}</td>
                                    <td>{{$result->PBB}}</td>
                                   
                                    <td>
                                        <a href="{{route('objekpajak.edit',[encrypt($result->id)])}}" class="d-inline btn btn-purple btn-sm"><i class="fa fa-pencil"> Edit</i></a>
                                        <form method="POST" action="{{ route('objekpajak.destroy', [encrypt($result->id)]) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="d-inline btn btn-purple btn-sm"><i class=" fa fa-trash"> Hapus</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
        @endsection
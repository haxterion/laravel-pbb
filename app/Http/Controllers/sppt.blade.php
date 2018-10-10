@extends('layouts.index')
@section('title','Dashboard')
@section('content')

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Halaman gdf</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="col-md-12 col-sm-12">
                <div class="card rounded-top rounded-bottom">
                    <div class="card-header text-white" style="background: #8B189B">
                        <strong class="text-light">Form SPPT</strong>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" enctype="Multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Kode Provinsi</label>
                                <input type="text" name="kd_prov" id="angka" class="form-control" placeholder="kodeprovinsi" >
                            </div>
                            <div class="form-group">
                                <label>Kode Dati</label>
                                <input type="text" name="kd_dati" class="form-control" placeholder="kode dati">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" placeholder="alamat">
                            </div>
                            <div class="form-group">
                                <label>Alamat Desa</label>
                                <input type="text" name="alamat_desa" class="form-control" placeholder="Alamat Desa">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-block rounded">Submit</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="btn btn-danger btn-block rounded">Batal</a>
                                </div>
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
                                <th><font size="2">NIK</font></th>
                                <th><font size="2">Nama</font></th>
                                <th><font size="2">Alamat</font></th>
                                <th><font size="2">Alamat Desa</font></th>
                                <th><font size="2">Opsi</font></th>
                              </tr>
                            </thead>
                            <tbody>
                                
                                    <a href="#" class="d-inline btn btn-purple btn-sm"><i class="text-white fa fa-mail-forward">detail</i></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
        @endsection
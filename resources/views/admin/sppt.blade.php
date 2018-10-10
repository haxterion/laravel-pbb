@extends('layouts.index')
@section('title','Dashboard')
@section('content')

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Halaman SPPT</h1>
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
                                <label>Kode provinsi</label>
                                <select type="text" name="kd_provinsi" id="kd_provinsi" class="form-control" placeholder="Kode Provinsi">
                                    <option>--Pilih Provinsi--<option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Dati</label>
                                <select type="text" name="kd_dati" id="kd_dati" class="form-control" placeholder="Kode Dati">
                                    <option>--Pilih Dati--<option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Kecamatan</label>
                                <select type="text" name="kd_kec" id="kd_kec" class="form-control" placeholder="Kode kecamatan">
                                    <option>--Pilih Kecamatan--<option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode kelurahan</label>
                                <select type="text" name="kd_kel" id="kd_kel" class="form-control" placeholder="Kode kelurahan">
                                    <option>--Pilih Kelurahan--<option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Blok</label>
                                <select type="text" name="kd_blok" id="kd_blok" class="form-control" placeholder="Kode Blok">
                                    <option>--Pilih Blok--<option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Urut</label>
                                <select type="text" name="kd_urut" id="kd_urut" class="form-control" placeholder="Kode Urut">
                                    <option>--Pilih Urut--<option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kode Jenis Op</label>
                                <select type="text" name="kd_jenis_op" id="kd_jenis_op" class="form-control" placeholder="Kode Jenis Op">
                                    <option>--Pilih Jenis Op--<option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tahun Pajak</label>
                                <input type="text" name="tahun_pajak" id="tahun_pajak" class="form-control" placeholder="Tahun Pajak" >
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK" >
                            </div>
                            <div class="form-group">
                                <label>Nama Wajib Pajak</label>
                                <input type="text" name="nm_wajib_pjk" id="nm_wajib_pjk" class="form-control" placeholder="nama wajib pajak" >
                            </div>
                            <div class="form-group">
                                <label>Alamat Wajib Pajak</label>
                                <input type="text" name="alamat_wajib_pjk" id="alamat_wajib_pjk" class="form-control" placeholder="alamat wajib pajak" >
                            </div>
                            <div class="form-group">
                                <label>Tanggal Jatuh Tempo</label>
                                <input type="date" name="tgl_jth_tmp" id="tgl_jth_tmp" class="form-control" placeholder="tanggal jatuh tempo" >
                            </div>
                            <div class="form-group">
                                <label>PBB</label>
                                <input type="text" name="pbb" id="pbb" class="form-control" placeholder="PBB" >
                            </div>
                            <div class="form-group">
                                <label>Denda</label>
                                <input type="text" name="denda" id="denda" class="form-control" placeholder="Denda" >
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input type="text" name="status" id="status" class="form-control" placeholder="Status" >
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
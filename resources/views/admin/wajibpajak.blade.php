@extends('layouts.index')
@section('title','Dashboard')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Halaman Wajib Pajak</h1>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="col-md-12 col-sm-12">
        <div class="card rounded-top rounded-bottom">
            <div class="card-header text-white" style="background: #8B189B">
                <strong class="text-light">Form Wajib Pajak </strong>
            </div>
            <div class="card-body">
                <form action="{{ route('wajib_pajak.store') }}" method="post"  enctype="Multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" maxlength="16" minlength="16" id="angka"maxlength="16" class="form-control" placeholder="NIK" >
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label>Alamat Desa</label>
                        <input type="text" name="alamat_desa" class="form-control" placeholder="Alamat Desa">
                    </div>
                    <div class="form-group">
                        <label>Alamat Kecamatan</label>
                        <input type="text" name="alamat_kec" class="form-control" placeholder="Alamat Desa">
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
                                    <th><font size="2">Alamat Kecamatan</font></th>
                                    <th><font size="2">Opsi</font></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datawajibpajak as $nomor=>$result)
                                <tr>
                                    <td>{{$nomor+1}}</td>
                                    <td>{{$result->NIK}}</td>
                                    <td>{{$result->Nama}}</td>
                                    <td>{{$result->Alamat}}</td>
                                    <td>{{$result->Alamat_desa}}</td>
                                    <td>{{$result->Alamat_kecamatan}}</td>
                                    <td>
                                        <a href="{{route('wajib_pajak.edit',[encrypt($result->id)])}}" class="d-inline btn btn-purple btn-sm"><i class="fa fa-pencil"> Edit</i></a>
                                        <form method="POST" action="{{ route('wajib_pajak.destroy', [encrypt($result->id)]) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="d-inline btn btn-purple btn-sm"><i class=" fa fa-trash"> Hapus</i></button>>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endsection
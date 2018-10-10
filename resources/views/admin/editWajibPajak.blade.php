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
                @foreach($datawajibpajak as $result)
                <form action="{{ route('wajib_pajak.update',[encrypt($result->id)]) }}" method="post"  enctype="Multipart/form-data">
                    {{csrf_field()}}
          {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" value="{{$result->NIK}}" maxlength="16" minlength="16" id="angka"maxlength="16" class="form-control" placeholder="NIK" >
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="{{$result->Nama}}" class="form-control" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="{{$result->Alamat}}" class="form-control" placeholder="alamat">
                    </div>
                    <div class="form-group">
                        <label>Alamat Desa</label>
                        <input type="text" name="alamat_desa" value="{{$result->Alamat_desa}}" class="form-control" placeholder="Alamat Desa">
                    </div>
                    <div class="form-group">
                        <label>Alamat Kecamatan</label>
                        <input type="text" name="alamat_kec" value="{{$result->Alamat_kecamatan}}" class="form-control" placeholder="Alamat Desa">
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
                @endforeach
            </div>

        </div>
    </div>
</div>
            @endsection
@extends('layouts.index')
@section('title','Dashboard')
@section('content')

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Halaman Tambah Petugas</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inventori</a></li>
                            <li><a href="#">Petugas</a></li>
                            <li class="active">Daftar Petugas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @if (session('status'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>NIP : </strong> {{ session('status') }}
                                        <strong><i>( Masukkan NIP Lainnya )</i></strong>
                                    </div>
        @endif
        <div class="content mt-3">
            <div class="col-md-12 col-sm-12">
                <div class="card rounded-top rounded-bottom">
                    <div class="card-header text-white" style="background: #8B189B">
                        <strong class="text-light">Form Tambah petugas </strong>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" enctype="Multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" name="id_petugas" maxlength="18" id="angka" class="form-control" placeholder="ID" >
                            </div>
                            <div class="form-group">
                                <label>Nama Petugas</label>
                                <input type="text" name="nm_petugas" class="form-control" placeholder="nama petugas">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="pass" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="lv_user" value="2" class="form-control">
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
        @endsection
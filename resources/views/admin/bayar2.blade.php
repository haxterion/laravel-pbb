@extends('layouts.index')
@section('title','Barang Masuk')
@section('content')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Barang Masuk</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Inventori</a></li>
                            <li><a href="#">Transaksi</a></li>
                            <li class="active">Barang Masuk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <a href="#" class="btn bg-purple text-white"><i class="fa fa-plus"></i> Tambah</a>
                    <hr>
                    <div class="card">
                    <div class="card-header" style="background: #8B189B">
                        <strong class="card-title text-white">Barang Masuk</strong>
                    </div>
                    <div class="card-body">
                    <font>
                        <i class="text-danger">*</i><i> untuk melihat detail per-barang klik tombol</i> <button class="btn btn-purple btn-sm rounded-circle text-white "><i class="fa fa-mail-forward"> </i></button>
                    </font><hr>

                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead class="bg-light">
                              <tr>
                                <th><font size="2">No</font></th>
                                <th><font size="2">ID</font></th>
                                <th><font size="2">Merk</font></th>
                                <th><font size="2">Register</font></th>
                                <th><font size="2">Tgl Masuk</font></th>
                                <th><font size="2">Keadaan</font></th>
                                <th><font size="2">Jumlah</font></th>
                                <th><font size="2">Harga</font></th>
                                <th><font size="2">Total</font></th>
                                <th><font size="2">Opsi</font></th>
                              </tr>
                            </thead>
                            <tbody>
                                <!-- <?php $no=1;?>
                            @foreach($data as $dt)
                              <tr>
                                <td><font size="2">{{$no}}</font></td>
                                <td><font size="2">{{$dt->ID_TRX}}</font></td>
                                <td><font size="2">{{$dt->MERK}}</font></td>
                                <td><font size="2">{{$dt->register}}</font></td>
                                <td><font size="2">{{$dt->TANGGAL_MASUK}}</font></td>
                                <td><font size="2">{{$dt->KEADAAN_BARANG}}</font></td>
                                <td><font size="2">{{$dt->jumlah}}</font></td>
                                <td><font size="2">{{number_format($dt->HARGA,0,",",".")}}</font></td>
                                <td><font size="2">{{number_format($dt->total,0,",",".")}}</font></td>
                                <td>
                                    <a href="{{route('barang-masuk.show',$dt->ID_TRX)}}" class="d-inline btn btn-purple btn-sm"><i class="text-white fa fa-mail-forward">detail</i></a>
                                </td>
                              </tr>
                              <?php $no++?>
                            @endforeach -->
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection
@extends('layouts.admin')
@section('content')




<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Add Data Identitas</h6>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                <br>
                <div class="form-group">
                        <label class="col-md-2 control-label">Klasifikasi Id</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Klasifikasi Id">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label">Tahun</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="judul" placeholder="Masukan Tahun">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label">Nomor urut</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Nomor Urut">
                            </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-2 control-label">Gambar</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Gambar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Deskripsi</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="pembuat" placeholder="Masukkan Deskripsi">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
                            </div>
                        </form>
                    </div>
                    <!-- panel-body -->
                    <!-- End row -->
@endsection
@extends('layouts.admin')
@section('content')




<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Add Data Sarana</h6>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                <br>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Gambar</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control" name="gambar" placeholder="Masukkan Judul Artikel">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Deskripsi</label>
                            <div class="col-md-10">
                                <textarea type="text" class="form-control" name="deskripsi" placeholder="Masukkan Pembuat Artikel">></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Edit</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
                            </div>
                        </form>
                    </div>
                    <!-- panel-body -->
                    <!-- End row -->
@endsection
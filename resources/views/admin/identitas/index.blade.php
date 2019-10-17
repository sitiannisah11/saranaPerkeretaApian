@extends('layouts.admin')
@section('content')



<!-- DataTales Example -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <a target="_blank"></a>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Identitas</h6>
      <button h class="btn btn-outline-primary">
        <a href="/add_identitas">
          <i class="fas fa-plus"></i>
        </a>
      </button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No Id</th>
              <th>Klasifikasi Id</th>
              <th>Tahun</th>
              <th>Nomor Urut</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Software Engineer</td>
              <td>London</td>
              <td>41</td>
              <td>
                <a href="#" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="#" class="btn btn-outline-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>12</td>
              <td>Integration Specialist</td>
              <td>Sidney</td>
              <td>37</td>
              <td>
                <a href="#" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="#" class="btn btn-outline-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>13</td>
              <td>Developer</td>
              <td>London</td>
              <td>53</td>
              <td>
                <a href="#" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="#" class="btn btn-outline-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>14</td>
              <td>Technical Author</td>
              <td>London</td>
              <td>27</td>
              <td>
                <a href="#" class="btn btn-outline-warning">
                  <i class="far fa-edit"></i>
                </a>
                <a href="#" class="btn btn-outline-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection

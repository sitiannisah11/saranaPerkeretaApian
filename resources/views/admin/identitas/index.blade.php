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
        <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>User Id</th>
              <th>Klasifikasi Id</th>
              <th>Tahun</th>
              <th>Nomor Urut</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th>Create_at</th>
              <th>Aksi</th>
            </tr>
          </thead>
            <tr>
              <td>14</td>
              <td>3</td>
              <td>Technical Author</td>
              <td>London</td>
              <td>33</td>
              <td>dsaa</td>
              <td>sdff</td>
              <td>12-12-2001</td>
              <td>
                <a href="/edit_identitas" class="btn btn-outline-warning">
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

<script type="text/javascript">
  $.ajax({
  url: "http://172.10.0.219:3333/api/v1/users",
  cache: false,
  type: "GET",
  success: function(html){
    console.log(html)
  }
});
</script>
<!-- /.container-fluid -->
@endsection

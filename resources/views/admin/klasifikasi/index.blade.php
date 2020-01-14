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
      <h6 class="m-0 font-weight-bold text-primary">DataTables Sarana</h6>
      <button h class="btn btn-outline-primary">
        <a href="/add_klasifikasi">
          <i class="fas fa-plus"></i>
        </a>
      </button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="Table" class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>User_Id</th>
              <th>Kodefikasi_Id</th>
              <th>Kode</th>
              <th>Nama</th>
              <th>Seri_tipe</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
            <tr>
              <td>14</td>
              <td>14</td>
              <td>45CD2324</td>
              <td>12453</td>
              <td>Fahrul</td>
              <td>2</td>
              <td>London.jpg</td>
              <td>London mantap</td>
              <td>
                <a href="/edit_klasifikasi" class="btn btn-outline-warning">
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
  url: "https://jsonplaceholder.typicode.com/todos",
  cache: false,
  type: "GET",
  success: function(html){
    console.log(html)
  }
});
</script>
<!-- /.container-fluid -->
@endsection

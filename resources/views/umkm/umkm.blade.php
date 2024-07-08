<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Umkm</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('admin.header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Umkm</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">UMKM</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Daftar UMKM</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          @if (session('pesan'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <a href="{{ url('admin/umkm/create') }}" class="btn btn-dark mb-3">+ Tambah Umkm</a>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr class="table-success">
                  <th>id</th>
                  <th>Nama</th>
                  <th>Modal</th>
                  <th>Pemilik</th>
                  <th>Alamat</th>
                  <th>Website</th>
                  <th>Email</th>
                  <th>Rating</th>
                  <th>Kabkota ID</th>
                  <th>Kategori Umkm ID</th>
                  <th>Pembina ID</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              @foreach ($list_umkm as $umkm)
              <tr>
              <td>{{ $umkm->id }}</td>
              <td>{{ $umkm->nama }}</td>
              <td>{{ $umkm->modal }}</td>
              <td>{{ $umkm->pemilik }}</td>
              <td>{{ $umkm->alamat }}</td>
              <td>{{ $umkm->website }}</td>
              <td>{{ $umkm->email }}</td>
              <td>{{ $umkm->rating }}</td>
              <td>{{ $umkm->kabkota_id }}</td>
              <td>{{ $umkm->kategori_umkm_id }}</td>
              <td>{{ $umkm->pembina_id }}</td>
                <td>
                  <a href="{{ url('admin/umkm/show', $umkm->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a>
                  <a href="{{ url('admin/umkm/edit', $umkm->id) }}" class="text-warning"><i class="far fa-edit"></i> Edit</a> 
                  <form action="{{ url('admin/umkm/destroy', $umkm->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="far fa-trash-alt"></i>Hapus</button>
                </form>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('admin.footer')
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets')}}/js/demo.js"></script>
</body>
</html>

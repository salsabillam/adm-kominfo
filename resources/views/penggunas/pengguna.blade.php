@include('themes.head')

<body>

  <!-- ======= Header ======= -->
 @include('themes.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
 @include('themes.sidemenu')
  <!-- End Sidebar-->

 @include('sweetalert::alert')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pengguna</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Data Pengguna</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-20">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Tabel Pengguna</h5>
                    <div class="table-responsive">
                        <a href="/tambahPengguna"><button type="submit" class="mb-3 btn btn-success">Tambah</button></a>
                        <table class="table table-striped table datatable" id="dataTable" width="50%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td scope="row">{{ $item['name'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['username'] }}</td>
                                    <td>{{ $item['role'] }}</td>
                                    <td><img src="{{ asset('storage/pengguna-foto/'.$item->foto) }}" alt="" width="100%" height="100%"></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/editPengguna/{{ $item['id'] }}"><button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                            <form onclick="return confirm('Yakin hapus data ini?')" action="/deletePengguna/{{ $item['id'] }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"><a id="delete"></a></i></button>
                                            </form>
                                            <a href="/detailPengguna/{{ $item['id'] }}"><button class="btn btn-info"><i class="bi bi-info-circle"></i></button></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('themes.footer');
</body>

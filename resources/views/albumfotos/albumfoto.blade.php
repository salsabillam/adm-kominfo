@include('themes.head')

<body>

  <!-- ======= Header ======= -->
@include('themes.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
 @include('themes.sidemenu')
  <!-- End Sidebar-->

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Album</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Album</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-20">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Tabel Album</h5>
                    <div class="table-responsive">
                        <a href="/tambahAlbumfoto"><button type="submit" class="mb-3 btn btn-success">Tambah</button></a>
                        <table class="table table-striped table datatable" id="dataTable" width="50%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($albumfotos as $item)
                                <tr>
                                    <td scope="row">{{ $item['judul'] }}</td>
                                    <td>{{ $item['tgl'] }}</td>
                                    <td><img src="{{ asset('storage/album-image/'.$item->cover) }}" alt="" width="100%" height="100%"></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/editAlbumfoto/{{ $item['id'] }}"><button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                            <form onclick="return confirm('Yakin hapus data ini?')" action="/deleteAlbumfoto/{{ $item['id'] }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                            <a href="/detailAlbumfoto/{{ $item['id'] }}"><button class="btn btn-info"><i class="bi bi-info-circle"></i></button></a>
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
    @include('sweetalert::alert')
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('themes.footer');
</body>

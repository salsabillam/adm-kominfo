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
      <h1>Dokumen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Dokumen</li>
          <li class="breadcrumb-item active">Detail Data Dokumen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-20">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Tabel Dokumen</h5>
                    <div class="table-responsive">
                        <a href="/tambahDokumen"><button type="submit" class="mb-3 btn btn-success">Tambah</button></a>
                        <table class="table table-striped table datatable" id="dataTable" width="50%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Dokumen</th>
                                    <th>Link</th>
                                    {{-- <th>File</th> --}}
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dokumens as $item)
                                <tr>
                                    <td scope="row">{{ $item['nama_doc'] }}</td>
                                    <td>{{ $item['link'] }}</td>
                                    {{-- <td><button type="button" class="mb-2 btn btn-danger"><i class="bi bi-file-pdf" src="{{ asset('storage/dokumen-file/'.$item->file) }}" alt="" width="100%"></i></button></td> --}}
                                    <td>{{ $item['keterangan'] }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/editDokumen/{{ $item['id'] }}"><button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                            <form onclick="return confirm('Yakin hapus data ini?')" action="/deleteDokumen/{{ $item['id'] }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                            <a href="/detailDokumen/{{ $item['id'] }}"><button class="btn btn-info"><i class="bi bi-info-circle"></i></button></a>
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

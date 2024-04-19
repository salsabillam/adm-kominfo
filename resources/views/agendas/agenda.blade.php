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
      <h1>Agenda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Agenda</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="col-lg-20">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Tabel Agenda</h5>
                    <div class="table-responsive">
                        <a href="/tambahAgenda"><button type="submit" class="mb-3 btn btn-success">Tambah</button></a>
                        <a href="/pdfAgenda"><button target="_blank" class="mb-3 btn btn-danger">PDF</button></a>
                        <table class="table table-striped table datatable" id="dataTable" width="50%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Hari</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Lokasi</th>
                                    <th>Kegiatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agendas as $item)
                                <tr>
                                    <td scope="row">{{ $item['hari'] }}</td>
                                    <td>{{ $item['tgl'] }}</td>
                                    <td>{{ $item['waktu'] }}</td>
                                    <td>{{ $item['lokasi'] }}</td>
                                    <td>{{ $item['kegiatan'] }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="/editAgenda/{{ $item['id'] }}"><button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></a>
                                            <form onclick="return confirm('Yakin hapus data ini?')" action="/deleteAgenda/{{ $item['id'] }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"><a id="delete"></a></i></button>
                                            </form>
                                            <a href="/detailAgenda/{{ $item['id'] }}"><button class="btn btn-info"><i class="bi bi-info-circle"></i></button></a>
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

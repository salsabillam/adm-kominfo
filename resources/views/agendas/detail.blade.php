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
      <h1>Agenda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Agenda</li>
          <li class="breadcrumb-item active">Detail Data Agenda</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href="/Agenda" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Detail Data Agenda {{ $agendas['id'] }}</h5>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- General Form Elements -->
                        <form action="/detailAgenda/{{ $agendas['id'] }}" method="GET" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                                <div class="col-sm-3">
                                    <label class="col-form-label">{{ $agendas['hari'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-3">
                                    <label class="col-form-label">{{ $agendas['tgl'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                                <div class="col-sm-3">
                                    <label class="col-form-label">{{ $agendas['waktu'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-3">
                                    <label class="col-form-label">{{ $agendas['lokasi'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $agendas['kegiatan'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_id" class="col-sm-2 col-form-label">User</label>
                                <div class="col-sm-3">
                                    <label class="col-form-label">{{ $agendas['user']['username'] }}</label>
                                </div>
                            </div>
                    </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('themes.footer');
</body>

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
      <h1>Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Berita</li>
          <li class="breadcrumb-item active">Detail Data Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href=" /Berita" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Detail Data Berita {{ $beritas['id'] }}</h5>
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
                        <form action="/detailBerita/{{ $beritas['id'] }}" method="GET" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $beritas['judul'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-3">
                                    {{-- @foreach ($kategori_berita as $item)
                                    <label value="{{ $item['id'] }}">{{ $item['kategori'] }}</label>
                                    @endforeach --}}
                                    <label class="col-form-label"> {{ $beritas['kategori_berita']['kategori'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label"> {{ $beritas['isi'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/berita-file/'.$beritas->gambar) }}" alt="" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-3">
                                    <label class="col-form-label">{{ $beritas['tgl'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    @if ($beritas['status'] == '0')
                                    <label class="col-form-label">Unpublish</label>
                                    @else
                                    <label class="col-form-label">Publish</label>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_id" class="col-sm-2 col-form-label">User</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $beritas['user']['username'] }}</label>
                                </div>
                            </div>
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

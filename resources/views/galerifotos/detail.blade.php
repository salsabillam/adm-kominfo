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
      <h1>Galeri Foto</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Galeri Foto</li>
          <li class="breadcrumb-item active">Detail Data Galeri Foto</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href="/Galerifoto" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Detail Data Galeri Foto {{ $galerifotos['id'] }}</h5>
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
                        <form action="/detailGalerifoto/{{ $galerifotos['id'] }}" method="GET" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="album_id" class="col-sm-2 col-form-label">Album</label>
                                <div class="col-sm-5">
                                    {{-- @foreach ($albums as $item)
                                    <label value="{{ $item['id'] }}">{{ $item['judul'] }}</label>
                                    @endforeach --}}
                                    <label class="col-form-label">{{ $galerifotos['album']['judul'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $galerifotos['judul'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/galerifoto-file/'.$galerifotos->foto) }}" alt=""  width="100%" height="100%">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $galerifotos['keterangan'] }}</label>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->

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

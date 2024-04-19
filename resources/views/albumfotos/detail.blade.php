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
          <li class="breadcrumb-item active">Detail Data Album</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href="/Albumfoto" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Detail Data Album {{ $albumfotos['id'] }}</h5>
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
                        <form action="/detailAlbumfoto/{{ $albumfotos['id'] }}" method="GET" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $albumfotos['judul'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-3">
                                    <label class="col-form-label">{{ $albumfotos['tgl'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/album-image/'.$albumfotos->cover) }}" alt="" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_id" class="col-sm-2 col-form-label">User</label>
                                <div class="col-sm-3">
                                    <label class="col-form-label">{{ $albumfotos['user']['username'] }}</label>
                                </div>
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

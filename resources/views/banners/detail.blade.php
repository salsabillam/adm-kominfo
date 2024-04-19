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
      <h1>Banner</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Banner</li>
          <li class="breadcrumb-item active">Detail Data Banner</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href=" /Banner" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Detail Data Banner {{ $banners['id'] }}</h5>
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
                        <form action="/detailBanner/{{ $banners['id'] }}" method="GET" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $banners['judul'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    @if ($banners['kategori'] = '0')
                                    <label class="col-form-label">Banner Link</label>
                                    @else
                                    <label class="col-form-label">Banner Pengumuman</label>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="file" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/banner-image/'.$banners->file) }}" alt="" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="link" class="col-sm-2 col-form-label">Link</label>
                                <div class="col-sm-10">
                                    <div class="col-sm-10">
                                        <label class="col-form-label">{{ $banners['link'] }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    @if ($banners['status'] == '0')
                                    <label class="col-form-label">Unpublish</label>
                                    @else
                                    <label class="col-form-label">Publish</label>
                                    @endif
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

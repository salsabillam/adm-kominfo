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
      <h1>Galeri Video</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Galeri Video</li>
          <li class="breadcrumb-item active">Tambah Data Galeri Video</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href=" /Galerivideo" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Tambah Data Galeri Video</h5>
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
                        <form action="/postGalerivideo" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukan Judul">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                                <div class="col-sm-10">
                                    <input type="file" name="cover" class="form-control" aria-describedby="passwordHelpBlock">
                                    <span class="text-danger">*) Maksimal Cover: 3MB</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="embed" class="col-sm-2 col-form-label">Embed</label>
                                <div class="col-sm-10">
                                    <div class="input-group sm-2">
                                        <span class="input-group-text" id="basic-addon3">https://</span>
                                        <input type="text" id="embed" name="embed" class="form-control" aria-describedby="passwordHelpBlock" placeholder="example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="keterangan" id="kegiatan" style="height: 100px;" aria-describedby="passwordHelpBlock" placeholder="Masukan Keterangan"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="mt-3 mb-3 btn btn-success">Simpan</button>
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

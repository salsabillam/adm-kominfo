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
          <li class="breadcrumb-item active">Tambah Data Banner</li>
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
                        <h5 class="card-title">Tambah Data Banner</h5>
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
                        <form action="/postBanner" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukan Judul">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="kategori">
                                        <option selected>Pilih Kategori</option>
                                        <option value="0">Banner Link</option>
                                        <option value="1">Banner Pengumuman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="file" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukan File">
                                    <span class="text-danger">*) Maksimal File: 3MB</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="link" class="col-sm-2 col-form-label">Link</label>
                                <div class="col-sm-10">
                                    <div class="input-group sm-2">
                                        <span class="input-group-text" id="basic-addon3">https://</span>
                                        <input type="text" id="link" name="link" class="form-control" aria-describedby="passwordHelpBlock" placeholder="example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status">
                                        <option selected>Pilih Status</option>
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                    </select>
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

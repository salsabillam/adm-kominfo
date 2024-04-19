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
      <h1>Header Slide</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Header Slide</li>
          <li class="breadcrumb-item active">Edit Data Header Slide</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href="/Headerslide" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Edit Data Header Slide {{ $headers['id'] }}</h5>
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
                        <form action="/updateHeaderslide/{{ $headers['id'] }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $headers['judul'] }}" placeholder="Masukan Judul">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="file" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $headers['file'] }}">
                                    <span class="text-danger">*) Maksimal File: 3MB</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="keterangan" id="keterangan" style="height: 100px;" aria-describedby="passwordHelpBlock" placeholder="Masukan Keterangan"><?php echo $headers['keterangan'] ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status">
                                        <option selected>Pilih Status</option>
                                        <option value="0">Publish</option>
                                        <option value="1">Unpublish</option>
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

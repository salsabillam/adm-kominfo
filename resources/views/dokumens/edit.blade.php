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
          <li class="breadcrumb-item active">Edit Data Dokumen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href=" /Dokumen" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Edit Data Dokumen {{ $dokumens['id'] }}</h5>
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
                        <form action="/updateDokumen/{{ $dokumens['id'] }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="nama_doc" class="col-sm-2 col-form-label">Nama Dokumen</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_doc" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukan Nama Dokumen" value="{{ $dokumens['nama_doc'] }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="link" class="col-sm-2 col-form-label">Link</label>
                                <div class="col-sm-10">
                                    <div class="input-group sm-2">
                                        <span class="input-group-text" id="basic-addon3">https://</span>
                                        <input type="text" id="link" name="link" class="form-control" aria-describedby="passwordHelpBlock" placeholder="example.com" value="{{ $dokumens['link'] }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="file" class="col-sm-2 col-form-label">File</label>
                                <div class="col-sm-10">
                                    <input type="file" name="file" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $dokumens['file'] }}">
                                    <span class="text-danger">*) Maksimal Dokumen: 5MB</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="keterangan" id="keterangan" style="height: 100px;" aria-describedby="passwordHelpBlock" placeholder="Masukan Keterangan"><?php echo $dokumens['keterangan'] ?></textarea>
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

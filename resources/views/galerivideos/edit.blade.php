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
          <li class="breadcrumb-item active">Edit Data Galeri Video</li>
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
                        <h5 class="card-title">Edit Data Galeri Video {{ $galerivideos['id'] }}</h5>
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
                        <form action="/updateGalerivideo/{{ $galerivideos['id'] }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $galerivideos['judul'] }}" placeholder="Masukan Judul">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                                <div class="col-sm-10">
                                    <input type="file" name="cover" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $galerivideos['cover'] }}">
                                    <span class="text-danger">*) Maksimal Cover: 3MB</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="embed" class="col-sm-2 col-form-label">Embed</label>
                                <div class="col-sm-10">
                                    <div class="input-group sm-2">
                                        <span class="input-group-text" id="basic-addon3">https://</span>
                                        <input type="text" id="embed" name="embed" class="form-control" aria-describedby="passwordHelpBlock" value="{{ $galerivideos['embed'] }}" placeholder="example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="keterangan" id="kegiatan" style="height: 100px;" aria-describedby="passwordHelpBlock" placeholder="Masukan Keterangan"><?php echo $galerivideos['keterangan'] ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_id" class="col-sm-2 col-form-label">User</label>
                                    <div class="col-sm-3">
                                        <select class="form-select form-select-sm @error('user_id') is-invalid @enderror" aria-label=".form-select-sm example" name="user_id">
                                            <option selected>Pilih User</option>
                                            @foreach ($user as $item)
                                            <option value="{{ $item['id'] }}">{{ $item['username'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
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

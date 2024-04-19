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
          <li class="breadcrumb-item active">Tambah Data Berita</li>
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
                        <h5 class="card-title">Tambah Data Berita</h5>
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
                        <form action="/postBerita" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" aria-describedby="passwordHelpBlock" placeholder="Masukan Judul">
                                    @error('judul')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-4">
                                    <select class="form-select form-select-sm @error('kategori_berita_id') is-invalid @enderror" aria-label=".form-select-sm example" name="kategori_berita_id">
                                        <option selected>Pilih Kategori</option>
                                        @foreach ($kategori_berita as $item)
                                        <option value="{{ $item['id'] }}">{{ $item['kategori'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                                <div class="col-sm-10">
                                    <textarea class="tinymce-editor @error('isi') is-invalid @enderror" name="isi" id="isi" style="height: 100px;" aria-describedby="passwordHelpBlock" placeholder="Masukan Isi"></textarea>
                                    @error('isi')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror" aria-describedby="passwordHelpBlock" placeholder="Masukan Gambar">
                                    <span class="text-danger">*) Maksimal Gambar: 3MB</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-3">
                                    <input type="date" id="tgl" name="tgl" class="form-control @error('tgl') is-invalid @enderror" aria-describedby="passwordHelpBlock">
                                    @error('tgl')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm @error('status') is-invalid @enderror" aria-label=".form-select-sm example" name="status">
                                        <option selected>Pilih Status</option>
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                    </select>
                                    @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="user_id" class="col-sm-2 col-form-label">User</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm @error('user') is-invalid @enderror" aria-label=".form-select-sm example" name="user_id">
                                        <option selected>Pilih User</option>
                                        <option value="1">Super Admin</option>
                                        <option value="2">Operator</option>
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

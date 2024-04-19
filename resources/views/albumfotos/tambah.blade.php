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
          <li class="breadcrumb-item active">Tambah Data Album</li>
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
                        <h5 class="card-title">Tambah Data Album</h5>
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
                        <form action="/postAlbumfoto" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Masukan Judul">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-3">
                                    <input type="date" name="tgl" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cover" class="col-sm-2 col-form-label">Cover</label>
                                <div class="col-sm-10">
                                    <input type="file" id="cover" name="cover" class="form-control" aria-describedby="passwordHelpBlock">
                                    <span class="text-danger">*) Maksimal Cover: 3MB</span>
                                </div>
                                <div class="mt-3"><imh src="" id="output"></div>
                            </di>
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


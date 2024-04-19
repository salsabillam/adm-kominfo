@include('themes.head')

<body>

  <!-- ======= Header ======= -->
@include('themes.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
 @include('themes.sidemenu')
  <!-- End Sidebar-->
 @include('sweetalert::alert')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Agenda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Agenda</li>
          <li class="breadcrumb-item active">Tambah Data Agenda</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href="/Agenda" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Tambah Data Agenda</h5>
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
                        <form action="/postAgenda" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="hari" class="col-sm-2 col-form-label">Hari</label>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="hari">
                                        <option selected>Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jum'at">Jum'at</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-3">
                                    <input type="date" name="tgl" class="form-control" placeholder="Masukan Tanggal" aria-describedby="passwordHelpBlock">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                                <div class="col-sm-3">
                                    <input type="text" name="waktu" class="form-control" placeholder="H:i:s" aria-describedby="passwordHelpBlock">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-3">
                                    <input type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Masukan Lokasi" aria-describedby="passwordHelpBlock">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
                                <div class="col-sm-10">
                                    <textarea class="tinymce-editor" name="kegiatan" id="kegiatan" placeholder="Masukan Kegiatan" style="height: 100px;" aria-describedby="passwordHelpBlock"></textarea>
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

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
      <h1>Data Pengguna</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Data Pengguna</li>
          <li class="breadcrumb-item active">Detail Data Pengguna</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
          <div class="col-lg-20">

            <div class="card">
              <div class="card-body">
                <div class="py-2">
                  <a href="/Pengguna" class="btn btn-outline-danger">&laquo; Kembali</a>
                </div>
                <h5 class="card-title">Tambah Data Pengguna</h5>
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
                <form action="/postPengguna" method="post" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autocomplete="off">
                      @error('name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-5">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autocomplete="off">
                      @error('email')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" autocomplete="off">
                      @error('username')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" autocomplete="off">
                      @error('password')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-3">
                      <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role">
                        <option selected>Pilih Role</option>
                        <option value="superadmin">Super Admin</option>
                        <option value="operator">Operator</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                      <input type="file" id="foto" name="foto" class="form-control" aria-describedby="passwordHelpBlock">
                      <span class="text-danger">*) Maksimal Foto: 3MB</span>
                    </div>
                  </div>
                  <button type="submit" class="mt-3 mb-3 btn btn-success" id="save">Simpan</button>
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

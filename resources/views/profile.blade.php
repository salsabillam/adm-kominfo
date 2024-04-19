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
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img class="inline-block" src="{{ asset('storage/pengguna-foto/'.Auth::user()->foto) }}" alt="{{Auth::user()->foto}}">
                        <h2>{{ Auth::user()->nama }}</h2>
                        <h3>{{ Auth::user()->username }}</h3>
                    </div>
                </div>

            </div>

            <div class=" col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                            </li>

                            {{-- <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ubah Password</button>
                            </li> --}}

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Username</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->username }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Role</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->role }}</div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form action="/Profile" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mb-3">
                                      <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                      <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" aria-describedby="passwordHelpBlock" value="{{ old('name', Auth::user()->name) }}">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                      <div class="col-md-8">
                                        <input type="text" name="email" class="form-control" aria-describedby="passwordHelpBlock" value="{{ old('email', Auth::user()->email) }}">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                      <div class="col-md-8">
                                        <input type="text" name="username" class="form-control" aria-describedby="passwordHelpBlock" value="{{ old('username', Auth::user()->username) }}">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                      <div class="col-md-8">
                                        <input type="password" name="password" class="form-control" aria-describedby="passwordHelpBlock" value="{{ old('password', Auth::user()->password) }}">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                                      <div class="col-sm-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role">
                                          <option selected>Pilih Role</option>
                                          <option value="superadmin">Super Admin</option>
                                          <option value="operator">Operator</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="foto" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                                      <div class="col-md-8">
                                        <input type="file" name="foto" class="form-control" aria-describedby="passwordHelpBlock" value="{{ old('foto', Auth::user()->foto) }}">
                                        <span class="text-danger">*) Maksimal Foto: 3MB</span>
                                      </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="mt-3 mb-3 btn btn-success" id="delete">Simpan</button>
                                    </div>
                                    </form><!-- End Profile Edit Form -->

                            </div>
                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('themes.footer');
</body>


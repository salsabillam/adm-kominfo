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
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->
        <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            @if (auth()->user()->role == "superadmin")
            <!-- Sales Card -->
            <div class="col-xxl-2 col-md-4">
                <div class="card info-card sales-card">

                    <div class="filter">
                        <a class="icon" href="#"></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Album</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-image"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalalbum }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-2 col-md-4">
                <div class="card info-card sales-card">

                    <div class="filter">
                        <a class="icon" href="#"></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Data Pengguna</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totaluser }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-2 col-md-4">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                        <h5 class="card-title">Kategori Berita</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalkatberita }}</h6>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-2 col-xl-4">

                <div class="card info-card customers-card">

                    <div class="filter">
                        <a class="icon" href="#"></a>

                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Kategori Halaman Statis</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-journal-text"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalkathalstatis }}</h6>

                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Customers Card -->
            @endif

            @if (auth()->user()->role == "operator")
                        <!-- Sales Card -->
                        <div class="col-xxl-2 col-md-4">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#"></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Foto</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-image"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $totalfoto }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-2 col-md-4">
                <div class="card info-card sales-card">

                    <div class="filter">
                        <a class="icon" href="#"></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Agenda</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-calendar-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalagenda }}</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-2 col-md-4">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalberita }}</h6>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-2 col-xl-4">

                <div class="card info-card customers-card">

                    <div class="filter">
                        <a class="icon" href="#"></a>

                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Halaman Statis</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-image"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $totalstatis }}</h6>

                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Customers Card -->
            @endif
            <!-- Reports -->
            <div class="col-12">
                <div class="card">

                    <div class="filter">
                        <a class="icon" href="#"></a>
                    </div>

                </div>
            </div><!-- End Reports -->

        </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('themes.footer')
</body>

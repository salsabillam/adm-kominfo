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
      <h1>FAQ</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/Dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">FAQ</li>
          <li class="breadcrumb-item active">Detail Data FAQ</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-20">

                <div class="card">
                    <div class="card-body">
                        <div class="py-2">
                            <a href=" /Faq" class="btn btn-outline-danger">&laquo; Kembali</a>
                        </div>
                        <h5 class="card-title">Detail Data FAQ {{ $faqs['id'] }}</h5>
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
                        <form action="/detailFAQ/{{ $faqs['id'] }}" method="GET" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $faqs['pertanyaan'] }}</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jawaban" class="col-sm-2 col-form-label">Jawaban</label>
                                <div class="col-sm-10">
                                    <label class="col-form-label">{{ $faqs['jawaban'] }}</label>
                                </div>
                            </div>
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


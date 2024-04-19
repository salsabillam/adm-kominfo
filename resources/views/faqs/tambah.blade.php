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
          <li class="breadcrumb-item active">Tambah Data FAQ</li>
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
                        <h5 class="card-title">Tambah Data FAQ</h5>
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
                        <form action="/postFaq" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="pertanyaan" class="col-sm-2 col-form-label">Pertanyaan</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pertanyaan" class="form-control" placeholder="Masukan Pertanyaan" aria-describedby="passwordHelpBlock">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jawaban" class="col-sm-2 col-form-label">Jawaban</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="jawaban" id="jawaban" placeholder="Masukan Jawaban" style="height: 100px;" aria-describedby="passwordHelpBlock"></textarea>
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


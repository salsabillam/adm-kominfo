@extends('themes.auth')

@section('main-content')
<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-2">Selamat Datang!</h5>
                        <p class="text-center small">Dinas Komunikasi dan Informatika Kota Bogor</p>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger border-left-danger" role="alert">
                        <ul class="pl-4 my-2">
                            @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                  <form action="" method="POST">
                    @csrf
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                        <div class="invalid-feedback">Masukan email Anda</div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12 py-3">
                        <div class="form-group">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                    </div>
                    <div class="col-12">
                      <label for="email" class="form-label"></label>
                      <button name="submit" type="submit" class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
@endsection

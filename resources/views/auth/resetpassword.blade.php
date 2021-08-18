<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Red Comecial y Educación">
  <meta name="author" content="Build.IT">
  <title>MinerApp</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/android-icon-192x192.png" type="image/png">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">

  {{-- para mobile --}}

  <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
  <link rel="manifest" href="../assets/img/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../assets/img/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  {{-- fin para mobile --}}

</head>
<body>  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="bg-white  py-5 py-lg-8 pt-sm-1">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <img src="{{ asset('/assets/img/android-icon-192x192.png') }}" style="width: 200px">
              <h1 style="color: #13538a">Restablece tu contraseña</h1>
              <p style="color: #13538a;margin-bottom: 0;" class="text-lead mb-3">Bienevenido a <strong>Miner App</strong></p>
              <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token')}}">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input id="email" value="{{ $request->email}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                        <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                        <input id="password-confirm" type="password" placeholder="Repetir Contraseña"class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
        
                
                <div class="row mt-2">
                  <div class="col-sm-5 mx-auto text-center">
                    <button type="submit" class="btn btn-primary btn-block mx-auto" >Recuperar Contraseña</button>
                  </div>
                </div>
                
                
              </form>
            </div>
          </div>
        </div>
      </div> 
    </div>

  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2021 <a href=" class="font-weight-bold ml-1" target="_blank">PipeCodeTeam</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <script type="module">



import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

const el = document.createElement('pwa-update');
document.body.appendChild(el);

  </script>
</body>

</html>
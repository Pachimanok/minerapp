@include('layouts.header')
<body>
    {{-- @include('layouts.nav') --}}
    @include('layouts.user')
    <div class="header pb-6">
        <div class="container-fluid">
            <div class="card" style="border: none;">
                <div class="card-body text-left">
                    <h5 class="pb-0">Saldo Disponible:</h5>
                    <h4 class="display-1 text-success pt-0 pb-2">${{ $aCobrar }}</h4>
                    <h5 class="pb-0">Saldo para desbloquear:</h5>
                    <h4 class="display-1 pt-0" style="color: grey;"> ${{ $desbloq }}</h4>
                    <a href="/acobrar" class="btn btn-primary btn-block" style="border-radius: 50px;">
                        <p>ver detalle</p>
                    </a>
                </div>
            </div>
            <div class="card" style="border:none;background: #f7f8f9">
                <div class="card-body text-center pt-1 pb-1">
                    <p class="mt-0" style="color:gray">Ulitmos Movimientos:</p>

                    @foreach ($ultimos as $ultimo)
                        @if ($ultimo->estado == 'a cobrar')
                            <div class="row" style="background: #f7f8f9">
                                <div class="col" style="max-width: 10%">
                                    <i class="ni ni-check-bold mt-3 text-success"></i>
                                </div>
                                <div class="col text-success" style="max-width: 60%; min-width: 60%;">
                                    <p class="text-left mb-0" style="font-size: small;">{{ $ultimo->alianza }} </p>
                                    <p class="text-left mt-0"
                                        style="font-size: small; font-weight: 500;margin-top: -0.3rem !important;">
                                        ID:{{ $ultimo->idPedido }}
                                    </p>
                                </div>
                                <div class="col text-success">
                                    <p class="text-rigth mt-2" style="font-size: small;font-weight: 500;">$
                                        {{ $ultimo->monto }} </p>
                                </div>
                            </div>
                            <hr class="mt-1 mb-1">
                        @else
                        <div class="row" style="background: #f7f8f9">
                          <div class="col text-primary" style="max-width: 10%">
                              <i class="ni ni-fat-delete mt-3 text-primary"></i>
                          </div>
                          <div class="col text-primary" style="max-width: 60%; min-width: 60%;">
                              <p class="text-left mb-0" style="font-size: small;">{{ $ultimo->alianza }} </p>
                              <p class="text-left mt-0"
                                  style="font-size: small; font-weight: 500;margin-top: -0.3rem !important;">ID:{{ $ultimo->idPedido }}
                              </p>
                          </div>
                          <div class="col text-primary">
                              <p class="text-rigth mt-2" style="font-size: small;font-weight: 500;">$ {{ $ultimo->monto }} </p>
                          </div>
                      </div>
                      <hr class="mt-1 mb-1">
                        @endif
                    @endforeach
                    <a href="" class="text-center" style="font-weight: 500;">+</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>

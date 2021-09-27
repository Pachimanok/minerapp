@include('layouts.header')

<body>
    @include('layouts.nav2')

    <div class="header mt-5 pb-6">
        <div class="container-fluid" style="margin-top:20% !important;">
            <p class="text-center mt-5"
                style="font-size: smaller; margin: 2rem 1rem; line-height: initial; color: #3c3c43b3; margin-top: 31% !important;">
                Para recibir tu dinero, recuerda que debes completar tus desafíos educativos.</p>
            <div class="card" style="border: none;">
                <div class="card-body text-left pt-0 pl-0 pr-0 mb-5">
                    <div class="row ml-4 mr-4 text-center"
                        style="height: 5rem; border-radius: 10px; background: #e2f4f5;">
                        <div class="col-sm-4 pl-3 pr-0 mt-3" style="max-width: 33%;">
                            <div class="card text-center" style="background: #e2f4f5; border-style: revert;">
                                <h6>Puntos Miner</h6>
                                <h5 class="pt-0"> </h5>
                            </div>
                        </div>
                        <div class="col-sm-4 pl-1 pr-3 mt-3" style="max-width: 34%;">
                            <a href="/billetera">
                                <div class="card text-center"
                                    style="height: 3rem; background: #e2f4f5; border-style: revert;">
                                    <h6>Total Recaudado</h6>
                                    <h5 class="pt-0"> ${{ $aCobrar }}.00 </h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pl-1 pr-3 mt-3 mb-5" style="max-width: 33%;">
                            <a href="#">
                                <div class="card text-center"
                                    style="height: 3rem; background: #e2f4f5; border-style: revert;">
                                    <h6>Total Reetirado</h6>
                                    <h5 class="pt-0"> ${{ $desbloq }} </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-sm-9">
                        <h2>Mi Actividad</h2>
                    </div>
                    <div class="col-sm-3 text-right p-3" style="font-size: initial;">
                        <a href=""
                            class="">  Ver Todo</a>

                    </div>
                </div>
                <div class="
                            card" style="border:none;">
                            <div class="card-body text-center pt-1 pb-1">
                                @foreach ($ultimos as $ultimo)
                                    @if ($ultimo->cobrado == '1')
                                        <div class="row" style="background: #f7f8f9">
                                            <div class="col" style="max-width: 10%">
                                                <i class="ni ni-check-bold mt-3 text-success"></i>
                                            </div>
                                            <div class="col text-primary" style="max-width: 60%; min-width: 60%;">
                                                <h5 class="text-left mb-0">{{ $ultimo->alianza }}
                                                </h5>
                                                <p class="text-left mt-0"
                                                    style="font-size: small; font-weight: 500;margin-top: -0.3rem !important;">
                                                    {{ date('d-m-Y', strtotime($ultimo->created_at)) }}
                                                </p>
                                                <p class="text-left mt-0"
                                                    style="font-size: small; font-weight: 500;margin-top: -0.3rem !important;">
                                                    {{ $ultimo->titulo }} - ${{ $ultimo->monto }}
                                                </p>
                                            </div>
                                            <div class="col text-primary">
                                                <h4 class="text-rigth mt-2">$
                                                    {{ $ultimo->comision }}.00 </h4>
                                            </div>
                                        </div>
                                        <hr class="mt-1 mb-1">
                                    @else
                                        <div class="row">
                                            <div class="col text-primary" style="max-width: 10%">
                                                <i class="ni ni-fat-delete mt-3 text-primary"></i>
                                            </div>
                                            <div class="col text-primary" style="max-width: 60%; min-width: 60%;">
                                                <h5 class="text-left mb-0">{{ $ultimo->alianza }}
                                                </h5>
                                                <p class="text-left mt-0"
                                                    style="font-size: small; font-weight: 500;margin-top: -0.3rem !important;">
                                                    {{ date('d-m-Y', strtotime($ultimo->created_at)) }}
                                                </p>
                                                <p class="text-left mt-0"
                                                    style="font-size: small; font-weight: 500;margin-top: -0.3rem !important;">
                                                    {{ $ultimo->titulo }} - ${{ $ultimo->monto }}
                                                </p>
                                            </div>
                                            <div class="col text-primary">
                                                <h4 class="text-rigth mt-2">$
                                                    {{ $ultimo->comision }}.00 </h4>
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
            @include('layouts.navegacion2')
</body>

</html>

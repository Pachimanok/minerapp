@include('layouts.header')

<body>
    @include('layouts.user')
    <div class="header pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row mt-1">
                    @foreach ($minerales as $mineral)
                        <li class="list-group-item"
                            style="padding: 0rem 1rem !important; border: none; position: relative;">
                            <div class="row">
                                <div class="col-auto text-center ml-2 pl-0"
                                    style="width: 25%;overflow: hidden; margin: 0px 10px 0px 10px; position: relative;">
                                    <img alt="Image placeholder" src="{{ asset('/img/avatar/' . $mineral->avatar) }}"
                                        class="img-fluid" style="border-radius: 0px 10px 10px 0px; position:absolute;left: -100%;right: -100%;top: -100%;bottom: -100%;margin: auto;min-height: 100%;min-width: 100%;">
                                </div>
                                <div class="col-auto" style="width: 60%;     padding-left: 0;">
                                    <h4 class="mb-0 text-sm pb-0">{{ $mineral->nombre_fantasia }} <small></small></h4>
                                    <p class="text-sm mt-1 mb-1" style="line-height: 10px; color:#A6AAB4;"><small><i
                                                class="fas fa-money-check-alt"></i> {{ $mineral->medios_pago }}</small>
                                    </p>
                                    <p class="text-sm mt-1 mb-1" style="line-height: 10px; color:#A6AAB4;"><small><i
                                                class="fas fa-map-marker-alt"></i> {{ $mineral->shipping }}</small></p>

                                    <a href="#"><span class="badge badge-primary bg-white"
                                            style="text-transform: lowercase !important;">
                                            {{ $mineral->hash }}</span></a>
                                </div>
                                <div class="col-auto" style="width: 10%;">
                                    <a href="alianza/{{ $mineral->id }}" style="color:#A6AAB4"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <hr style="margin: 1rem 0rem; height: 0px;">
                        </li>
                    @endforeach

                    <div class="row text-center mt-5">
                        <div class="col-sm-5 mx-auto">
                            <a href="" class="btn btn-primary" style="border-radius: 50px;">Recomendar Alianza</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->

    </div>
    </div>
    {{-- bootstrap script --}}

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

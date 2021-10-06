@include('layouts.header')
<body>
    
    <div class="header pb-6">
        <div class="card-header d-flex" style="background: #F5F5F5;
        padding: 1rem;">
            <div class="col-sm-1 text-left" style="max-width: 1rem; margin-top: 0.5rem; padding-left: 0;">
                <a href="{{ url()->previous() }}"><i style="font-size: x-large;" class="fas fa-chevron-left"></i></a>
            </div>
            <div class="col-sm-10 text-center pl-0">
                <h3 class="card-title mb-0">Minar</h3>
            </div>
        </div>
        <div class="container">
            <p class="text-center" style="margin: 2rem 2rem 2rem;">¿Dónde hiciste tu compra?</p>
            @foreach ($minerales as $mineral)
                <li class="list-group-item" style="padding: 0rem 1rem !important; border: none; position: relative;">
                    <a href="minado/{{ $mineral->id }}">
                    <div class="d-flex" style="height: 3rem;">
                        <div class="col-auto text-center ml-2 pl-0"
                            style="width: 25%;overflow: hidden; margin: 0px 10px 0px 10px; position: relative;">
                            <img alt="Image placeholder" src="{{ asset('/img/avatar/' . $mineral->avatar) }}"
                                class="img-fluid"
                                style="border-radius: 0px 10px 10px 0px; position:absolute;left: -100%;right: -100%;top: -100%;bottom: -100%;margin: auto;min-height: 100%;min-width: 100%;">
                        </div>
                        <div class="col-auto" style="width: 60%;     padding-left: 0;">
                            <h4 class="mb-0 text-sm pb-0">{{ $mineral->nombre_fantasia }}</h4> 
                        </div>
                        <div class="col-auto" style="width: 10%;">
                            <p style="color:#A6AAB4"><i class="fas fa-chevron-right"></i></p>
                        </div>
                    </div>
                    <hr style="margin: 0.8rem 0rem; height: 0px;">
                </a>
                </li>
            @endforeach
        </div>
    </div>




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

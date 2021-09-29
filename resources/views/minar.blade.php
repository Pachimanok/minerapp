@include('layouts.header')
<body>
    @include('layouts.barralateral')
    @include('layouts.user2')
    <div class="container-fluid" style="margin-top: 8rem !important;">
        <div class="header bg-white pb-6">
            <div class="header-body" style="height: 38rem;"> 
                <div class="row mt-1">
                    <ul>
                        @foreach ($minerales as $mineral)
                        <li class="list-group-item"
                        style="padding: 0rem 1rem !important; border: none; position: relative;background: #f0f8ff00;">
                        <a href="alianza/{{ $mineral->id }}" style="margin: 0px; width: 100%; height: 100%;">
                            <div class="row">
                                <div class="col-auto text-center ml-2 pl-0"
                                    style="width: 25%;overflow: hidden; margin: 0px 10px 0px 10px; position: relative;">
                                    <img alt="Image placeholder"
                                        src="{{ asset('/img/avatar/' . $mineral->avatar) }}" class="img-fluid"
                                        style="border-radius:10px 10px 10px 10px; position:absolute;left: -100%;right: -100%;top: -100%;bottom: -100%;margin: auto;min-height: 100%;min-width: 100%; object-fit: cover;  width: 180px;
                                        height: 50px;">
                                </div>
                                <div class="col-auto" style="width: 60%; padding-left: 0;">
                                    <h4 class="mb-0 text-sm pb-0">{{ $mineral->nombre_fantasia }}</h4>
                                    <p class="text-sm mt-1 mb-1" style="line-height: 10px; color:#A6AAB4;">
                                        <small><span style="text-align:center;    margin-right: 0.5rem;"><i
                                                    class="fas fa-credit-card"></i></span>{{ $mineral->medios_pago }}</small>
                                    </p>
                                    <p class="text-sm mt-1 mb-1" style="line-height: 10px; color:#A6AAB4;">
                                        <small><span style="text-align:center;"><i class="fas fa-map-marker-alt"
                                                    style="width: 17px; margin-right: 0.25rem;"></i></span>{{ $mineral->shipping }}</small>
                                    </p>
                                    <p class="text-sm mt-1 mb-1" style="line-height: 10px; color:#A6AAB4;">
                                        <small><span style="text-align:center;"><i class="ni ni-money-coins"
                                                    style="width: 17px; margin-right: 0.25rem;"></i></span>{{ $mineral->comision }}%</small>
                                    </p>
                                    <span class="badge badge-primary bg-white text-wrap text-left"
                                        style="text-transform:lowercase !important;">
                                        {{ $mineral->hash }}</span>
                                </div>
                                <div class="col-auto" style="width: 10%;">
                                    <i class="fas fa-chevron-right" style="color:#A6AAB4"></i>
                                </div>
                            </div>
                        </a>
                        <hr style="margin: 1rem 0rem; height: 0px;">
                    </li>
                    @endforeach
                    </ul>
                    <div class="d-flex text-center mt-3" style="margin-bottom: 35% !important;">
                        <div class="col-sm-5 mx-auto text-center">
                            <a href="" class="btn btn-primary" style="border-radius: 50px;">Recomendar Alianza</a>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
        @include('layouts.navegacion2')
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

<script src="../jquery-ui-1.12.1/jquery-ui.min.js'"></script>
<script type="module">
    import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

    const el = document.createElement('pwa-update');
    document.body.appendChild(el);
</script>
<script>
    var cursos = ['html', 'css', 'php']
    $('search').autocomplete({
        source: cursos
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>

</html>

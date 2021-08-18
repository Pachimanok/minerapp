@if ($user->role == 'minero')
    @include('layouts.header')

    <body>
        @include('layouts.user')
        <div class="header pb-6">
        @else
            @include('layouts.headerAlianza')

            <body>
                @include('layouts.user')
                <div class="header pb-6" style="max-width: 23rem;
    min-height: 38rem;
    margin-left: 40%;
    border-style: groove;
    border-radius: 20px;
    background: white;
    margin-top: 2rem;">
@endif
<div class="container-fluid">
    <a href="{{ URL::previous() }}" class="btn btn-block pb-0" style="border-radius: 50px;">| Salir |</a>
    <h3 class="text-center pb-0">Catalogo de Demo</h3>
    <div class="row text-center">
        <div class="col-sm-3 mx-auto">
        </div>
    </div>
    <br class="mt-1">

    @foreach ($picadas as $articulo)
        <li class="list-group-item">
            <div class="row align-items-center">
                <div class="col-auto text-center pl-0" style="width: 25%;">
                    <!-- Avatar -->
                    <img alt="Image placeholder" src="" class="avatar rounded-circle">
                </div>
                <div class="col-auto" style="width: 50%;">
                    <h4 class="mb-0 text-sm pb-0">{{ $articulo->title }}</h4>
                    <p class="text-sm mt-0 mb-0" style="line-height: 10px;">
                        <small>{{ $articulo->description }}</small></p>

                </div>
                <div class="col-auto" style="width: 20%;">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="text-sm text-primary mt-0 mb-0 pb-0">${{ $articulo->in_ars }}</h5>


                        </div>
                    </div>
                </div>
            </div>

        </li>

    @endforeach

</div>
</div>
</div>
</div>
</div>
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5
</body>

</html>

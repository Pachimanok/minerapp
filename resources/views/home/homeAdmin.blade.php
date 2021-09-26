@include('layouts.headerAlianza')

<!-- Sidebar -->
<div class="container">
    <h1>Administrador</h1>
</div>
<div class="fixed-top">
    <div>
        <div class="mt-1"></div>
        <button class="btn btn-default col-sm-1" onclick="sidebar();"><i class="ni ni-bullet-list-67"></i></button>
    </div>
    <div class="bg-default col-sm-1 fixed-top" id="sidebarbody" onclick="sidebar();" style="display:none; height: 100vh">
        <button class="ml-6 btn btn-default"><i class="ni ni-fat-remove"></i></button>
        <a href="/dashboard/alianzas" class="d-block text-info">Alianzas</a>
        <div class="mt-1"></div>
        <a href="/dashboard/minero" class="d-block text-info">Mineros</a>
        <div class="mt-1"></div>
        <a href="/dashboard/notificaciones" class="d-block text-info">Notificaciones</a>
        <div class="mt-1"></div>
        <a href="/dashboard/billetera" class="d-block text-info">Billetera/Minados</a>
        <div class="mt-1"></div>
        <a href="/dashboard/usuario" class="d-block text-info">Usuarios</a>
        <div class="mt-1"></div>
    </div>
</div>
<div class="ml-3">
    <h1>Administrador</h1>
</div>



    <!-- Scripts -->
    <script>
        function sidebar(){
            if(document.getElementById("sidebarbody").style.display == "none"){
                document.getElementById("sidebarbody").style.display = "block"; //show
            } else{
                document.getElementById("sidebarbody").style.display = "none"; //hide
            }
        }
    </script>
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
    <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
</body>

</html>
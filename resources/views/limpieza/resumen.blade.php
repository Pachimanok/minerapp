@include('layouts.headerAlianza')
<body>
@include('layouts.user')
<div class="header bg-primary pb-3">
  <div class="container">
    <br>
    <div class="card mt-2">
      <div class="card-body">
        <h2 class="text-success text-center ">¡Compra realizada correctamente!</h2>
        <h5 class="text-center text-secondary pb-0 mb-0">{{ $resumen->minero}}: Estaremos enviando el pedido a: {{ $resumen->titulo}}</h5>      
        <h6 class="text-center text-secondary pb-0 mb-0">Direccion: {{$resumen->calle}} {{$resumen->numero}} @if($resumen->calle == 'si') piso: {{$resumen->piso}} - Dpto: {{$resumen->dpto}}  @endif {{$resumen->localidad}} </h6>
        <h6 class="text-center text-secondary">Avisale a Contacto: {{$resumen->contacto}} que estermos entregando el pedido de {{$resumen->horario_envio}}</h6>
        <br><div class="row">
            <div class="col-sm-5 mx-auto">
              <a href="/home" class="btn btn-primary btn-block">Terminar</a>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
</div>
                    <!-- Footer -->
                    <footer class="footer  bg-dark ">
                        <h5 class="text-light text-center">MinerApp :: un minero en cada casa</h5>
                    </footer>
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

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

        <script>
          $(document).ready(function(){
                $('.count').prop('disabled', true);
                $(document).on('click','.plus'.$id,function(){
                $('.count').val(parseInt($('.count').val()) + 1 );
                });
                  $(document).on('click','.minus'.$id,function(){
                  $('.count').val(parseInt($('.count').val()) - 1 );
                    if ($('.count').val() == 0) {
                    $('.count').val(1);
                  }
                    });
            });
        </script>
</body>

</html>

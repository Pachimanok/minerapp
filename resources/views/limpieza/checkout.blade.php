<script>
  $()['jquery'];
  console.log($().jquery);
  </script>
@include('layouts.headerAlianza')
<body>
@include('layouts.user')
<div class="header bg-primary pb-3">
  <div class="container">
    <br>
    <div class="card mt-2">
      <form class="mb-5"action="/pedidolimpieza/{{$pedido->id}}" method="POST">
        @method('PUT')
        @csrf
      <div class="card-body">
        <h3 class="text-center">Número de Pedido: 000{{$pedido->id}}</h3>
        @foreach ($detalle as $detalle)
            <div class="col-auto" style="display: flex;">
              <img alt="Image placeholder" src="{{ asset('img/limpieza/' . $detalle->foto) }}" class="avatar rounded-circle">
              <h4 class="text-truncate ml-2" ><small>{{ $detalle->cantidad}} {{ $detalle->unidad}} de {{ $detalle->producto}}</small></h4>
            </div>
            <hr>
          @endforeach
          <h4 class="text-center">Total a Pagar: <br> ${{$pedido->total}}</h4>
          <hr>
          <div class="row form-inline">
            <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                <select type="text" name="modo_pago[]" class="form-control">
                  <option value="">-.Elegir modo de Pago.-</option>
                  <option value="efectivo">Efectivo</option>
                  <option value="transferencia">Transferencia</option>
                  <option value="Mercado Pago">Mercado Pago</option>
                </select>
            </div>
          </div>
          <div class="row form-inline">
            <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                <select type="text" name="horario_envio[]" class="form-control">
                  <option value="">-.Elegir horario.-</option>
                  <option value="10 a 12 AM">10 a 12 AM</option>
                  <option value="3 a 7 PM">3 a 7 PM</option>
                  <option value="Indistinto">Indistinto</option>
                </select>
            </div>
          </div>
          <div class="row form-inline">
            <div class="col-sm-12 mx-auto mb-2" style="text-align: center;">
                <textarea name="observaciones" rows="4" placeholder="Algun comentario..."></textarea>
          </div>
              <button type="submit" class="btn btn-primary btn-block">Terminar Pedido</button>
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

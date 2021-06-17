<script>
  $()['jquery'];
  console.log($().jquery);
  </script>
@include('layouts.header')
<body>
@include('layouts.user')
<div class="header pb-3">
  <div class="container">
    <br>
    <div class="card mt-2" style="border: none;">
      <form class="mb-5"action="/detpedhuerta/{{$id}}" method="POST">
        @method('PUT')
        @csrf
      <div class="card-body">
          @foreach ($pedidos as $pedido)
            <div class="media mb-3">
              <div class="d-flex">
                <img src="{{ asset('img/huerta/' . $pedido->foto) }}" style ="width: 3rem;" alt="" />
              </div>
              <div class="media-body" style="min-width: 8rem">
                <p class="mb-0 text-truncate" style="font-size: small;">{{$pedido->titulo}}</p>  
                <p class="mb-0 p-1" style="margin-top: -0.5em;"><strong>$ {{$pedido->preciouni}}</strong><small>/{{$pedido->unidad}}</small></p>
              </div>
            {{--   <div class="qty" style="text-align: center; margin-top: 3%;min-width: 8rem;">
                <a class="btn btn-primary minus m-0" style="width: 2rem;">-</a> --}}
                  <input type="number" name="cantidad[{{$pedido->id}}]" style="width: 3rem;text-align: center; height: 2.4rem;" placeholder='0' min="1" required>
                {{-- a <class="btn btn-primary plus" style="width: 2rem;">+</a>
              </div> --}}
            </div>
            <hr>
          @endforeach
          <div class="row">
            <div class="col-sm-5 text-center">
              <button type="submit" class="btn btn-primary pt-2 pb-2" style="width: 90%; border-radius: 50px; background: #1f538a; ">Hacer Pedido</button>
            <p class="text-success text-center">4 | 5</p>

            </div>
          </div>
        </div>
        </form>
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

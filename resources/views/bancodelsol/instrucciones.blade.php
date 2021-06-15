@include('layouts.header')
<body>
@include('layouts.user')
<div class="header pb-3">
  <div class="container mt-6">
    <br>
    <div class="card mt-2" style="border:none;">
      <div class="card-body" >
        <h1 class="text-center text-success p-0" style="font-size: -webkit-xxx-large;"><i class="ni ni-check-bold"></i></h1>
        <h2 class="text-success text-center p-0">¡Usuario Registrado Correctamente en MinerApp!</h2>
          <p class="text-center pb-0 mb-0">1. Compartí el Link al Usurio para que descargue la App de Banco del Sol.</h5> 
          <p class="text-center pb-0 mb-0">2. El usuario debe darse de alta.</h5>
          <p class="text-center pb-0 mb-0">2. Disfrutar de los Beneficios de contar con un Banco On Line.</h5>
        <br>
        <br><div class="row">
            <div class="col-sm-5 mx-auto">
              <a href="https://api.whatsapp.com/send?phone=542612128105&text=Para Descargar la App ingresá a este enlase: https://open.bancodelsol.com/h7QiLF9ufRtdfSh29" class="btn btn-success btn-block" style="border-radius: 50px;">Compartir</a>
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

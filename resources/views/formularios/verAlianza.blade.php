@include('layouts.header')

<body>
    @include('layouts.user')
    <div class="header pb-6">
        <div class="container-fluid" style="height: 5rem;
      overflow: hidden;
      position: relative;">
            <img src="{{ asset('assets/img/theme/vino.jpg') }}" alt=""
                style=" position:absolute;left: -100%;right: -100%;top: -100%;bottom: -100%;margin: auto;min-height: 100%;min-width: 100%;">
        </div>
        <div class="container">
            <p class="text-center" style="    font-size: smaller;
        margin: 2rem 1rem;
        line-height: initial;
        color: #3c3c43b3;">{{ $mineral->descripcion }}</p>
            <div class="d-flex">
                <div class="col-sm-2" style="max-width: 15%;
                text-align: center;
                margin: 0rem 1rem 0rem 1rem;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-sm-8">
                    <h4 class="pt-0">{{ $mineral->shipping }}</h4>

                </div>
            </div>
            <hr style="margin: 8px;
            height: 0px;
            color: #9fa2a5;">
            <div class="d-flex mt-4">
                <div class="col-sm-2" style="max-width: 15%;
              text-align: center;
              margin: 0rem 1rem 0rem 1rem;">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="col-sm-8">
                    <h4 class="pt-0">{{ $mineral->medios_pago }}</h4>

                </div>
            </div>
            <hr style="margin: 8px;
          height: 0px;
          color: #9fa2a5;">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header p-0" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <div class="col-sm-2" style="max-width: 15%;
                  text-align: center;
                  ">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="col-sm-8">
                        <h4 class="pt-0 pb-0">Contacto</h4>
    
                    </div>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header p-0" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <div class="col-sm-2" style="max-width: 15%;
                  text-align: center;
                  ">
                        <i class="far fa-question-circle"></i>
                    </div>
                    <div class="col-sm-8">
                        <h4 class="pt-0 pb-0">¿Qué hago despues de comprar?</h4>
    
                    </div>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header p-0" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <div class="col-sm-2" style="max-width: 15%;
                  text-align: center;
                  ">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="col-sm-8">
                        <h4 class="pt-0 pb-0">Terminos y Condiciones</h4>
    
                    </div>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
          </div>
          <div class="custom-control custom-checkbox mt-5 ml-3">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1" style=" color: #3c3c43b3;">Acepto los <Strong style="color: #13538a;">Términos y condiciones</Strong></label>
          </div>
          <div class="d-grid gap-2">
            <a class="btn btn-primary mt-3 text-white" style="border-radius: 10px;
            background: #13538a;" type="button">Ver Catálogo</a>
            
          </div>
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

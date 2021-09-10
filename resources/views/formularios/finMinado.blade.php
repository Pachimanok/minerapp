@include('layouts.header')

<body>
    @include('layouts.user')
    <div class="header pb-3">
        <div class="container mt-6">
            <br>
            <div class="card mt-2" style="border:none;">
                <div class="card-body">
                    <h1 class="text-center text-success p-0"><i class="fas fa-check-circle"></i></h1>
                    <h3 class="text-center p-0">¡El proceso se realizó con éxito!</h3>
                    <p class="text-gray text-center pb-0 mt-5 mb-0" style="line-height: 25px;">Revisaremos los datos y
                        en tu billetera encotraras el valor acumunlado</h5>
                    <p class="text-center pb-0 mb-0"> <small> La comision a recibir es de:</small></h6>
                    <p class="text-center mt-0">$ {{ $com }},00</h6>
                        <br>
                        <br>
                        <br>
                </div>
            </div>
            <div class="card" style="border:none; height: 2rem;">
                
            </div>
            <form action="/minado/{{ $alianza->id }}" method="POST">
                @method('PUT')
                @csrf                    
                <div class="col-sm-10 mx-auto">
                    <h3 class="text-center p-0">¿Cómo fué tu experiencia de compra?</h3>
                    <div class="d-flex" style="display: flex;
                    flex-direction: row-reverse;">
                            {{-- estrerlla 5 --}}    
                            <input type="radio" class="check" id="check-5" onclick="colorear5()" name="valuacion" value="5"
                            autocomplete="off">
                            <label class="btn color-gray bg-white" style="border: none;" id="check-5" for="check-5"><i
                                class="fas fa-star"></i>5</label>
                            {{-- estrerlla 4 --}}    
                            <input type="radio" class="check" id="check-4" onclick="colorear4()" name="valuacion" value="4"
                            autocomplete="off">
                            <label class="btn color-gray bg-white" style="border: none;" id="check-4" for="check-4"><i
                                class="fas fa-star"></i>4</label>
                            {{-- estrerlla 3 --}}    
                            <input type="radio" class="check" id="check-3" onclick="colorear3()" name="valuacion" value="3"
                            autocomplete="off">
                            <label class="btn color-gray bg-white" style="border: none;" id="check-3" for="check-3"><i
                                class="fas fa-star"></i>3</label>

                            {{-- estrerlla 2 --}}    
                            <input type="radio" class="check" id="check-2" onclick="colorear2()" name="valuacion" value="2"
                            autocomplete="off">
                            <label class="btn color-gray bg-white" style="border: none;" id="check-2" for="check-2"><i
                                class="fas fa-star"></i>2</label>

                            {{-- estrerlla 1 --}}    
                            <input type="radio" class="check" id="check-1" onclick="colorear1()" name="valuacion" value="1"
                            autocomplete="off">
                            <label class="btn color-gray bg-white" style="border: none;" id="check-1" for="check-1"><i
                                class="fas fa-star"></i>1</label>
                        </div>
                            <div class="d-grid gap-2">

                        <button type="submit" id="bot" class="btn btn-primary mt-3 text-white" disabled>finalizar</button>
                        </div>
                    <script>
                        function colorear1(){
                            
                            var cabs = document.querySelectorAll("#check-1");
                            cabs.forEach(function(v){v.style.color = "#ffa400"});

                            var bot = document.querySelectorAll("#bot");
                            document.querySelector('#bot').disabled = false;
                            
                            
                        }
                        function colorear2(){
                            
                            var cabs = document.querySelectorAll("#check-1,#check-2");
                            cabs.forEach(function(v){v.style.color = "#ffa400"});
                            document.querySelector('#bot').disabled = false;

                            
                        }
                        function colorear3(){
                            
                            var cabs = document.querySelectorAll("#check-1,#check-2,#check-3");
                            cabs.forEach(function(v){v.style.color = "#ffa400"});
                            document.querySelector('#bot').disabled = false;

                            
                        }
                        function colorear4(){
                            
                            var cabs = document.querySelectorAll("#check-1,#check-2,#check-3,#check-4");
                            cabs.forEach(function(v){v.style.color = "#ffa400"});
                            document.querySelector('#bot').disabled = false;

                            
                        }
                        function colorear5(){
                            
                            var cabs = document.querySelectorAll("#check-1,#check-2,#check-3,#check-4,#check-5");
                            cabs.forEach(function(v){v.style.color = "#ffa400"});
                            document.querySelector('#bot').disabled = false;

                        }

                    </script>
                </div>

               
        </div>


        </form>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  

</body>

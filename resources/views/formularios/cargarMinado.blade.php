@include('layouts.header')
<style>

input.form-control{
    border-left: none; 
    border-right: none; 
    border-top: none;
    height: 4rem;
    color: #8898aa;
}
select.form-control{
    border-left: none; 
    border-right: none; 
    border-top: none;
    height: 4rem;
    color: #8898aa;
    padding-left: 1.4rem;

}

input[type="date"]:before {
  color: #8898aa;
  content: attr(placeholder) !important;
  margin-right: 0.3em;
  padding: 11px;
}

input[type="date"]:focus:before {
  content: '' !important;
  color: #8898aa;

}
</style>
<body>

    <div class="header pb-6">
        <div class="card-header" style="background: #F5F5F5;
        text-align: center;
        padding: 1rem;">
            <h3 class="card-title mb-0">Detalles</h3>
        </div>
        <div class="container">
            <p class="text-center" style="    margin: 1rem 1rem 2rem; line-height: 19px; font-size: 15px; color: #8E8E93;;">Para completar la compra, recuerda que debes completar el campo "fecha de entrega".<br>*Estan excluido los servicios.</p>
           <form action="/minado" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container" style="min-height: 24rem;">
                <input type="hidden" name="alianza" value="{{ $alianza->id }}">
                <input type="date" class="form-control" name="fecha_pago"  placeholder="Fecha del Pago *" onchange="this.className=(this.value!=''?'has-value':'')" required>
                <input type="number" name="monto" style="padding-left: 1.4rem;"class="form-control" placeholder="Monto de compra*" required>
                <select name="mina[]" id="producto" class="form-control" onchange="ShowSelected()">
                    <option value="">Seleccionar Mina*</option>
                    @foreach ($minas as $mina)
                        <option value="{{ $mina->id }}">{{ $mina->titulo }}</option>
                    @endforeach
                    <option value="/mina/create">+ Agregar Mina</option>
                </select>
                <select name="parentesco[]" id="" class="form-control" required>
                    <option value="">Parentesco*</option>
                    <option value="Padre">Padre</option>
                    <option value="Madre">Madre</option>
                    <option value="Hermano">Hermano</option>
                    <option value="Tio">Tío</option>
                    <option value="Tia">Tía</option>
                    <option value="Abuelo">Abuelo</option>
                    <option value="Abuela">Abuela</option>
                    <option value="Otro">Otro</option>
                </select>
                <input type="email" name="email" style="padding-left: 1.4rem;"class="form-control" placeholder="email del comprador*" required>

                <select name="tipo_pago[]" id="" class="form-control" required>
                    <option value="">Tipo de Pago*</option>
                    <option value="Pago Único">Pago Único</option>
                    <option value="Suscripción">Suscripción</option>
                </select>
                <select name="metodo_pago[]" id="" class="form-control" required>
                    <option value="">Método de Pago*</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Transferencia">Transferencia</option>
                    <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                    <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                    <option value="Mercado Pago">Mercado Pago</option>
                </select>
                <input type="date" class="form-control" name="fecha_entrega"  placeholder="Fecha del Entrega *" onchange="this.className=(this.value!=''?'has-value':'')" required>
                <label style=" padding-left: 1.5rem; color: #8898aa; margin-top: 0.8rem; font-size: smaller;">Cargar comprobante (img,jpeg,png)*
                    <input  style="opacity:0;" name="comprobante"
                    type="file" required>
                </label>
            </div>
            <div class="custom-control custom-checkbox ml-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                <label class="custom-control-label" for="customCheck1" style=" color: #3c3c43b3;">Acepto los <Strong style="color: #13538a;">Términos y condiciones</Strong></label>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary mt-3 text-white" style="border-radius: 10px;
                background: #13538a;" type="button">Enviar</a>
                
              </div>
           </form>
        </div>
    </div>

    <script type="text/javascript">
        function ShowSelected()
        {
       
        var combo = document.getElementById("producto");
        var selected = combo.options[combo.selectedIndex].text;

        if (selected == '+ Agregar Mina'){
           /*  console.log(combo.options[combo.selectedIndex].value) */
            window.open('/mina/create','_top')
        }
        
        
        }
        </script>


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

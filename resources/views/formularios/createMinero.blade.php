{{-- modal usuario --}}
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content border-warning mt-5 mb-5">
            <div class="modal-body text-center">
                <h1 class="text-center" style="color: #13538a;">¡Hola {{ $mineros->user_name }}!</h1>
                <p class="text-center">Ya estás en nuestro sistema, termina de completar estos datos!</p>
                <form action="/minero/{{ $mineros->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="pl-lg-4">
                        <div class="col-sm-3 mx-auto">
                            <div>
                                <!-- this div just for demo display -->
                                <label class="dropimage" style="border-radius: 50%;margin: 0 auto;width: 60%;padding-bottom: 60%">
                                    <input id="perfil-upload" title="Drop image or click me" name="avatar" type="file">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Localización:</label>
                                <input type="localidad" name="localizacion" id="input-email" class="form-control"
                                    placeholder="Mendoza, Argentina" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Celular</label>
                                <input type="number" class="form-control" name="celular" placeholder="2610000000"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Nombre</label>
                                <input type="text" id="input-first-name" name="nombre" class="form-control"
                                    placeholder="Juan" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-last-name">Apellido</label>
                                <input type="text" id="input-last-name" name="apellido" class="form-control"
                                    placeholder="Perez" required>
                            </div>
                        </div>
                    </div>
                    <h6 class="heading-small text-muted mb-4">Acerca de mi:</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Descripcion Corta:</label>
                                <input type="text" class="form-control" name="subtitulo"
                                    placeholder="Jugador de Tejo - Jovi: Correr descalzo">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Mi frase:</label>
                                <input type="text" class="form-control" name="frase" placeholder="la pelota no se mancha">
                            </div>
                        </div>
                    </div>
                    <label class="form-control-label">Acerca de mi:</label>
                    <textarea rows="4" name="acerca" class="form-control"
                    placeholder="Contenos un poco mas de vos.."></textarea>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-5 mx-auto">
                        <button type="submit" class="btn btn-lg">Comenzar</button>
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

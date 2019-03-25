@extends('seller.vendedor')

@section('content')
<div class="container ">
    <div class="container ">
        <div class="row mi_container sombra border border-dark">
            <div class="col-md-12">
                @yield('inmueble')
                <hr class="mi_hr">
                </hr>
            </div>
            <div class="container">
                <div class="col-md-12 col-md-offset-0 bg-warning ">
                    <p>
                        Las fotos del predial y el documento de tradición y libertad son escenciales para poder agregar el inmueble.
                        <br>
                            Por favor no subas imágenes con marca de agua o con información de contacto, porque nuestros administradores podrán eliminar el contenido.
                            <br>
                                Las imágenes que corresponden a la documentación del inmueble, solo serán utilizadas para el manejo interno de la aplicación y no serán reveladas a terceros.
                            </br>
                        </br>
                    </p>
                </div>
            </div>
            <div class="col-md-12 ">
                <div class="col-md-12">
                    <h3 class="col-md-offset-0">
                        Imagenes
                    </h3>
                    <hr class="mi_hr">
                    </hr>
                </div>
            </div>
            <form accept-charset="utf-8" action="apartamento_submit" enctype="text/plain" method="POST">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h5 class="col-md-offset-0">
                            Foto del predial
                        </h5>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text bg-info" id="basic-addon1">
                                    <i class="far fa-image text-white">
                                    </i>
                                </span>
                            </div>
                            <input aria-describedby="basic-addon1" aria-label="Username" class="input_img" placeholder="Username" type="file">
                                <label class="col-md-12 col-md-offset-0" for="">
                                    ingrese solo una imagen.
                                    <br>
                                        Cada imagen debe tener un tamaño máximo de 2mb.
                                    </br>
                                </label>
                            </input>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <h5 class="col-md-offset-0">
                            fotos del documento tradición y libertad.
                        </h5>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend ">
                                <span class="input-group-text bg-info" id="basic-addon1">
                                    <i class="far fa-image text-white">
                                    </i>
                                </span>
                            </div>
                            <input aria-describedby="basic-addon1" aria-label="Username" class=" input_img" placeholder="Username" type="file">
                                <label class="col-md-12 col-md-offset-0" for="">
                                    ingrese minimo una imagen y maximo 6.
                                    <br>
                                        Cada imagen debe tener un tamaño máximo de 2mb.
                                    </br>
                                </label>
                            </input>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3 class="col-md-offset-0">
                            Dimensiones
                        </h3>
                        <hr class="mi_hr">
                        </hr>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" col-md-6">
                        <h5 class="col-md-offset-0">
                            Área (metros cuadrados)
                        </h5>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info" id="basic-addon1">
                                    <i class="fas fa-chart-area text-white">
                                    </i>
                                </span>
                            </div>
                            <input aria-describedby="basic-addon1" aria-label="Username" class="input_img" min="0" placeholder="" type="number">
                            </input>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3 class="col-md-offset-0">
                            Ubicación
                        </h3>
                        <hr class="mi_hr">
                        </hr>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class=" col-md-6">
                        <h5 class="col-md-offset-0">
                            Ciudad
                        </h5>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info" id="basic-addon1">
                                    <i class="fas fa-map-marker text-white">
                                    </i>
                                </span>
                            </div>
                            <input aria-describedby="basic-addon1" aria-label="Username" class="input_img" placeholder="" type="text">
                            </input>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <h5 class="col-md-offset-0">
                            Barrio
                        </h5>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info" id="basic-addon1">
                                    <i class="fas fa-map-marker text-white">
                                    </i>
                                </span>
                            </div>
                            <input aria-describedby="basic-addon1" aria-label="Username" class="input_img" placeholder="" type="text">
                            </input>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h5 class="col-md-offset-0">
                            Dirección
                        </h5>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info" id="basic-addon1">
                                    <i class="fas fa-map-marker text-white">
                                    </i>
                                </span>
                            </div>
                            <input aria-describedby="basic-addon1" aria-label="Username" class="input_img" placeholder="" type="text">
                            </input>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3 class="col-md-offset-0">
                            Valor
                        </h3>
                        <hr class="mi_hr">
                        </hr>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h5 class="col-md-offset-0">
                            Precio
                        </h5>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info" id="basic-addon1">
                                    <i class="fas fa-dollar-sign text-white">
                                    </i>
                                </span>
                            </div>
                            <input aria-describedby="basic-addon1" aria-label="Username" class="input_img" min="0" placeholder="" type="number">
                            </input>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3 class="col-md-offset-0">
                            Características Especiales
                        </h3>
                        <hr class="mi_hr">
                        </hr>
                    </div>
                </div>
                <div class="col-md-12">
                    @yield('caracteristicas')
                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h3 class="col-md-offset-0">
                            Imágenes del Inmueble
                        </h3>
                        <hr class="mi_hr">
                        </hr>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h5 class="col-md-offset-0">
                            Fotos del inmueble
                        </h5>
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info" id="basic-addon1">
                                    <i class="far fa-image text-white">
                                    </i>
                                </span>
                            </div>
                            <input aria-describedby="basic-addon1" aria-label="Username" class="input_img" placeholder="Username" type="file">
                                <label class="col-md-12 col-md-offset-0">
                                    Ingresa mínimo 1 imagen y máximo 6.
                                    <br>
                                        Cada imagen debe tener un tamaño máximo de 2mb.
                                    </br>
                                </label>
                            </input>
                        </div>
                    </div>
                </div>
                <button class="col-md-offset-6 col-md-1 btn btn-info mi_boton" type="submit">
                    enviar
                </button>
                <div class="col-md-12">
                    <h3>
                    </h3>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-12">
    <h3>
    </h3>
</div>
@endsection

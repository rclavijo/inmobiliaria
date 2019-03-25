@extends('seller.plantilla_inmueble') 

@section('inmueble')
<h1 class="col-md-offset-0">
    Apartamento
</h1>
@endsection

@section('caracteristicas')
<div class="col-md-12">
    <div class="col-md-4">
        <h4 class="col-md-offset-0">
            Número de baños
        </h4>
        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <span class="input-group-text bg-info" id="basic-addon1">
                    <i class="fas fa-bath text-white">
                    </i>
                </span>
            </div>
            <input aria-describedby="basic-addon1" aria-label="Username" class="form-control" min="0" placeholder="seleccione un numero" required="" type="number">
            </input>
        </div>
    </div>
    <div class="col-md-4">
        <h4 class="col-md-offset-0">
            Número de garajes
        </h4>
        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <span class="input-group-text bg-info" id="basic-addon1">
                    <i class="fas fa-warehouse text-white">
                    </i>
                </span>
            </div>
            <input aria-describedby="basic-addon1" aria-label="Username" class="form-control" min="0" placeholder="seleccione un numero" type="number">
            </input>
        </div>
    </div>
    <div class="col-md-4">
        <h4 class="col-md-offset-0">
            numero de habitaciones
        </h4>
        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <span class="input-group-text bg-info" id="basic-addon1">
                    <i class="fas fa-bed text-white">
                    </i>
                </span>
            </div>
            <input aria-describedby="basic-addon1" aria-label="Username" class="form-control" min="0" placeholder="seleccione un numero" type="number">
            </input>
        </div>
    </div>
    <div class="col-md-3">
        <input aria-describedby="basic-addon1" aria-label="Username" placeholder="" type="checkbox">
            <label for="">
                Piscina
            </label>
        </input>
    </div>
    <div class="col-md-3">
        <input aria-describedby="basic-addon1" aria-label="Username" placeholder="" type="checkbox">
            <label for="">
                Parqueadero
            </label>
        </input>
    </div>
    <div class="col-md-3">
        <input aria-describedby="basic-addon1" aria-label="Username" placeholder="" type="checkbox">
            <label for="">
                Ascensor
            </label>
        </input>
    </div>
    <div class="col-md-3">
        <input aria-describedby="basic-addon1" aria-label="Username" placeholder="" type="checkbox">
            <label for="">
                Cuarto util
            </label>
        </input>
    </div>
    <div class="col-md-12">
        <h4 class="col-md-offset-0">
            Precio de la administración
        </h4>
        <div class="input-group mb-3 ">
            <div class="input-group-prepend">
                <span class="input-group-text bg-info" id="basic-addon1">
                    <i class="fas fa-money-bill-alt fa-1x text-white">
                    </i>
                </span>
            </div>
            <input aria-describedby="basic-addon1" aria-label="Username" class="form-control" min="0" placeholder="Username" type="number">
            </input>
        </div>
    </div>
</div>
@endsection

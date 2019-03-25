@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script type="text/javascript">
    /* $('.number-only').keypress(function(e) {
     tecla = (document.all) ? e.keyCode : e.which;
     if (isNaN(this.value + "" + String.fromCharCode(e.charCode)) && (tecla != 8) || (tecla == 32) || (this.value.length > 10)) return false;
 }); */

 $(function(){

  $('.validanumericos').keypress(function(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if(isNaN(this.value + String.fromCharCode(e.charCode)) && (tecla != 8) || (tecla == 32) || (this.value.length >= 10) ) 
     return false;
  })
  .on("cut copy paste",function(e){
    e.preventDefault();
  });

});
    function submitform() {
    var inputRol = document.getElementById("rol");
    if ($('#person-form-link').hasClass("active")) inputRol.value = "seller_person";
    else {
        inputRol.value = "seller_company";
    }
    document.userform.submit();
};
</script>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <h3>
                        Información Personal
                    </h3>
                    <hr>
                        <div class="row">
                            <div class="justify-content-center w-100 btn-group" role="group">
                                <button class="active" id="person-form-link">
                                    Persona
                                </button>
                                <button id="company-form-link">
                                    Empresa
                                </button>
                            </div>
                        </div>
                        <hr>
                        </hr>
                    </hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('register') }}" method="POST" name="userform" role="form">
                                {{ csrf_field() }}
                                <input id="rol" name="rol" type="hidden" value="">
                                </input>
                                <div id="company-form" style="display: none;">
                                    <div class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }} col-md-12">
                                        <label class=" control-label" for="business_name">
                                            Razón Social
                                        </label>
                                        <input autofocus="" class="form-control" id="business_name" name="business_name" required="" type="text" value="{{ old('business_name') }}">
                                            @if ($errors->has('business_name'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('business_name') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </input>
                                    </div>
                                    <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }} col-md-12" id="Nit">
                                        <label class=" control-label" for="nit">
                                            Nit
                                        </label>
                                        <input autofocus="" class="form-control" id="nit" name="nit" required="" type="text" value="{{ old('nit') }}">
                                            @if ($errors->has('nit'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('nit') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </input>
                                    </div>
                                </div>
                                <div id="person-form" style="display: block;">
                                    <div class="form-group{{ $errors->has('identification') ? ' has-error' : '' }} col-md-12" id="Ced">
                                        <label class=" control-label" for="name">
                                            Cédula
                                        </label>
                                        <input autofocus="" class="form-control" id="identification" maxlength="10" name="identification" required="" type="text" value="{{ old('identification') }}">
                                            @if ($errors->has('identification'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('identification') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </input>
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6" id="Names">
                                        <label class=" control-label" for="name">
                                            Nombres
                                        </label>
                                        <input autofocus="" class="form-control" id="name" name="name" required="" type="text" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('name') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </input>
                                    </div>
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} col-md-6" id="LastNames">
                                        <label class="control-label" for="name">
                                            Apellidos
                                        </label>
                                        <input autofocus="" class="form-control" id="lastname" name="lastname" required="" type="text" value="{{ old('lastname') }}">
                                            @if ($errors->has('lastname'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('lastname') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-md-12" id="PC">
                                    <label class="control-label" for="phone">
                                        Teléfono
                                    </label>
                                    <input autofocus="" class="form-control validanumericos" id="phone" name="phone" required="" type="tel" value="{{ old('phone') }}">
                                        @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('phone') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                                <h3>
                                    Información de la Cuenta
                                </h3>
                                <hr/>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-12">
                                    <label class=" control-label" for="email">
                                        Correo Eléctronico
                                    </label>
                                    <input class="form-control" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('email') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                                    <label class="col-md-4 control-label" for="password">
                                        Contraseña
                                    </label>
                                    <input class="form-control" id="password" name="password" required="" type="password">
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>
                                                {{ $errors->first('password') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label" for="password-confirm">
                                        Confirmar Contraseña
                                    </label>
                                    <input class="form-control" id="password-confirm" name="password_confirmation" required="" type="password">
                                    </input>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button class="form-control" name="register-submit" onclick="submitform()">
                                            Registrarse
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<!--         <form id="company-form"  role="form" style="display: none;" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
                     
               
            </form> -->
@endsection

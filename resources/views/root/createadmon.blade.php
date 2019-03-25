@extends('layouts.app')

@section('content')
<script type="text/javascript">
    function submitform()
    {
        if ($("#company-form-link").hasClass('active')) {
            document.userform.submit();
            document.companyform.submit();
        }
        else
        {
            document.userform.submit();
            document.personform.submit();             
 
        }
      
    }
</script>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('identification') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Cédula</label>

                            <div class="col-md-12">
                                <input id="identification" type="text" class="form-control" name="identification" value="{{ old('identification') }}" required autofocus>

                                @if ($errors->has('identification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('identification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombres</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-4">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                           <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo Eléctronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
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
                                <button href="#" id="company-form-link">
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
                            <form action="{{ route('register') }}" method="POST" name="companyform" role="form">
                                {{ csrf_field() }}
                                <div class="form-group" id="company-form" style="display: none;">
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
                                    <div class="form-group{{ $errors->has('phonec') ? ' has-error' : '' }} col-md-12" id="PC">
                                        <label class="control-label" for="phonec">
                                            Teléfono
                                        </label>
                                        <input autofocus="" class="form-control" id="phonec" name="phonec" required="" type="text" value="{{ old('phonec') }}">
                                            @if ($errors->has('phonec'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('phonec') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </input>
                                    </div>
                                </div>
                            </form>
                            <form action="{{ route('register') }}" method="POST" name="personform" role="form">
                                {{ csrf_field() }}
                                <div id="person-form" style="display: block;">
                                    <div class="form-group{{ $errors->has('identification') ? ' has-error' : '' }} col-md-12" id="Ced">
                                        <label class=" control-label" for="name">
                                            Cédula
                                        </label>
                                        <input autofocus="" class="form-control" id="identification" name="identification" required="" type="text" value="{{ old('identification') }}">
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
                                            <input id="rol" name="rol" type="hidden" value="person">
                                            </input>
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
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-md-12">
                                        <label class="control-label" for="name">
                                            Teléfono
                                        </label>
                                        <input autofocus="" class="form-control" id="phone" name="phone" required="" type="text" value="{{ old('phone') }}">
                                            @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>
                                                    {{ $errors->first('phone') }}
                                                </strong>
                                            </span>
                                            @endif
                                        </input>
                                    </div>
                                </div>
                                <form action="{{ route('register') }}" method="POST" name="userform" role="form">
                                    {{ csrf_field() }}
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
                                </form>
                            </form>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a class="form-control btn btn-register" href="javascript: submitform()" id="register-submit" name="register-submit" tabindex="4" type="submit" value="Registrarse">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--         <form id="company-form"  role="form" style="display: none;" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
                     
               
            </form> -->
@endsection

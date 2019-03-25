@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    PROFILE USUARIO PRUEBA
                </div>
                <div class="panel-body">
                    <form action="{{ route('register') }}" method="POST" name="companyform" role="form">
                        {{ csrf_field() }}
                        <h2>
                            Nombre de Alguien
                        </h2>
                        @foreach($user as $dato)
                        <div class="form-group" id="company-form" style="display: block;">
                            <div class="form-group{{ $errors->has('business_name') ? ' has-error' : '' }} col-md-12">
                                <label class=" control-label" for="business_name">
                                    Razón Social
                                </label>
                                <input name="edname" type="text" value="{{ $dato->name }}">
                                </input>
                                <a href="{{ route('editnameseller') }}">
                                    editar
                                </a>
                            </div>
                        </div>
                        <button type="submit">
                            Editar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

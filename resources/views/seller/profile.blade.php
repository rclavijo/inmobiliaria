@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    PROFILE USUARIO PRUEBA
                </div>
                @foreach($user as $dato)

                @if($dato->user->rol == 'seller_person')
                @include ( 'seller.formpersonprofile')
                @else
                @include('seller.formcompanyprofile')
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

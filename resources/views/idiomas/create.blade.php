@extends('layouts.admin')
@section('content')
    @include('alerts.request')

    {!! Form::open(array('route'=>'idioma.store', 'method'=>'POST'))!!}
    <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
        <strong> Genero Agregado Correctamente.</strong>
    </div>
    <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
        <strong id="msj"> </strong>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

    @include('idiomas.forms.idiomaFrm')

    {!!link_to('#', $title='Registrar', $attributes = ['id'=>'registroIdioma', 'class'=>'btn btn-primary'], $secure = null)!!}
    {!! Form::close()!!}
@endsection

@section('scripts')
    {!!Html::script('js/script.js')!!}
@endsection

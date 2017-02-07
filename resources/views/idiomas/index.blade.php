@extends('layouts.admin')
@include('alerts.succes')

@section('content')
    <div class="users">
        <table class="table">
            <thead>
            <th>Nombre</th>
            <th>Operacion</th>
            </thead>

            @foreach($idiomas as $idioma)
                <tbody>
                <td>{{$idioma->name}}</td>
                <td>
                    {!!link_to_route('idioma.edit', $title = 'Editar', $parameters = $idioma->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
                </tbody>
            @endforeach
        </table>

    </div>
@endsection
@section('scripts')
    {!!Html::script('js/script3.js')!!}
@endsection

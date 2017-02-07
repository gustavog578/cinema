@extends('layouts.admin')
@include('alerts.succes')

@section('content')
    @if(isset($peliculas))
    <div class="users">
        <table class="table">
            <thead>
                <th>Nombre</th>
                <th>path</th>
                <th>Cast</th>
                <th>Direccion</th>
                <th>Duracion</th>
                <th>Accion</th>
            </thead>
            @foreach($peliculas as $pelicula)
                <tbody>
                    <td>{{$user->name}}</td>
                    <td>{{$user->path}}</td>
                    <td>{{$user->cast}}</td>
                    <td>{{$user->direction}}</td>
                    <td>{{$user->duration}}</td>
                    <td>
                        {!!link_to_route('pelicula.edit', $title = 'Editar', $parameters = $pelicula->id, $attributes = ['class'=>'btn btn-primary'])!!}
                    </td>
                </tbody>
            @endforeach
        </table>
        {!!$users->render()!!}
    </div>
    @else
        <p>No hay registros</p>
    @endif
@endsection
@section('scripts')
    {!!Html::script('js/script3.js')!!}
@endsection

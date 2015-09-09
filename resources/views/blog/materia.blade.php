@extends('app')

@foreach($materias as $materia)
    @if($materia['slug'] == $slug)
        @section('title')
            {{$materia['materia']}}
        @stop

        @section('content')
            <h1>{{$materia['materia']}}</h1>
            <p>{{$materia['texto']}}</p>
        @stop
    @endif
@endforeach
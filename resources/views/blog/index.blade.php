@extends('app')

@section('title')
    Meu Blog
@stop

@section('content')
    <ul>
    @foreach($materias as $materia)
        <li><a href="/materia/{{$materia['slug']}}">{{$materia['materia']}}</a></li>
    @endforeach
    </ul>
@stop
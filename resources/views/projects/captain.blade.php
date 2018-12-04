@extends('layout')
@section('content')
    <h1>{{$project->Name}}</h1>

    
    <button><a href="/project/{{$project->id}}/chat">Chat</a></button>
    <button><a href="/project/{{$project->id}}/edit">Enviar Ubicacion</a></button>
@endsection 
@extends('layout')
@section('content')
    <h1>{{$project->name}}</h1>

    
    <button><a href="/project/{{$project->id}}/chat">Chat</a></button>
    <button><a href="/project/{{$project->id}}/edit">Enviar Ubicacion</a></button>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                         <button type="submit" class="btn btn-primary">
                                    cerrar sesion
                                </button>
                                    </form>

@endsection 
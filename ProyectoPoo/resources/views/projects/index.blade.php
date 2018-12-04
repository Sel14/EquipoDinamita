@extends('layout')

@section('content')

	<h1>Projects</h1>
	
	<button><a href="/embarcaciones">Embarcaciones</a></button>

	<button><a href="/project/create"> Nuevo lanchero</a></button>
	
	 <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                         <button type="submit" class="btn btn-primary">
                                    cerrar sesion
                                </button>
                                    </form>

	
	
	
@endsection 

















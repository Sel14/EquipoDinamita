@extends('layout')
@section('content')
	<h1>Edit project</h1>
<form method="POST" action="/project/{{$project->id}}">
	{{method_field('PATCH')}}
	{{ csrf_field() }}
	<div>
 	 	<label>Lugar</label>
 	</div>
 		<div >
    		

    		<input type="radio" name="Place" value="Playa">Playa

			<br>

			<input type="radio" name="Place" value="Buscando delfines">Buscando delfines

			<br>

			<input type="radio" name="Place" value="Isla Pajaros">Isla Pajaros
			<br>

			<input type="radio" name="Place" value="Islote">Islote

</select>
	  	</div>
	  	<div>
 			<button type="submit">Enviar ubicacion</button>
 		</div>
 		
			
</form>
	
@endsection
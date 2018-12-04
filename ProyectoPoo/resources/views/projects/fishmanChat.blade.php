@extends('layout')
@section('content')
    <h1>Chat de {{$project->Name}}</h1>

    <form method="POST" action="/project/{{$project->id}}/message">
        {{method_field('PATCH')}}
	{{ csrf_field() }}
	<table>
    <tr>
        <td><strong>Nombre</strong></td>
        <td><strong>Mensaje</strong></td>       
    </tr>
    
    @foreach($message as $messages) 
        <div>
            <tr>
                <td>{{$messages->name}}</td>
                 <td>{{$messages->message}}</td>
            </tr>
        </div>  
    @endforeach
    </table>
  
	 <div>
		<input type="text" name="message" placeholder="Mensaje"><button type="submit">Enviar</button>
	</div>
    

</form>
    
@endsection 
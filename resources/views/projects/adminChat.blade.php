@extends('layout')
@section('content')
    <h1>Chat</h1>
<form method="POST" action="/chat/0">
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
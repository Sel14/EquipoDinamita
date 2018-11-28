@extends('layout')
@section('content')
    <h1>Lancheros</h1>

<table>
    <tr>
        <td><strong>lanchero</strong></td>
        <td><strong>telefono</strong></td>
        <td><strong>Lugar</strong></td>
        
    </tr>
    
    @foreach($project as $projects) 
        <div>
            <tr>
                <td>{{$projects->Name}}</td>
                 <td>{{$projects->Phone}}</td>
 				<td>{{$projects->Place}}</td>
            </tr>
        </div>  
    @endforeach
    </table>

    <button><a href="/admin/chat">Chat</a></button>

@endsection
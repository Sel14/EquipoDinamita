@extends('layout')
@section('content')
    <h1>Lancheros</h1>

<table>
    <tr>
        <td><strong>lanchero</strong></td>

        <td><strong>Lugar</strong></td>
        
    </tr>
    
    @foreach($project as $projects) 
        <div>
            <tr>
                <td>{{$projects->name}}</td>
         
 				<td>{{$projects->place}}</td>
            </tr>
        </div>  
    @endforeach
    </table>

    <button><a href="/admin/chat">Chat</a></button>

@endsection
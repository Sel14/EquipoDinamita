@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel = "stylesheet" href="css/bootstrap.min.css">
    <title>Chat</title>
<style>

.container1 {    
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container1::after {
    content: "";
    clear: both;
    display: table;
}


.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}

.background{
  background: #418445;
}

</style>
</head>
<body class="background">
  <div class="container-fluid text-center bg-secondary">
    <div class="container text-white">
      <h3>Chat</h3>
    </div>
  </div>

  <form method="POST" action="/project/{{$project->id}}/message">
    {{method_field('PATCH')}}
    {{ csrf_field() }}
@foreach($message as $messages) 


    <div class="container1 bg-secondary darker ml-3">
      <div class="text-white">
        <p>{{$messages->name}}</p>
        <p>{{$messages->message}}</p>
      </div>
    </div>

  @endforeach
    
  <input type="text" name="message" placeholder="Mensaje"><button type="submit">Enviar</button>

  </form>

   


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
@endsection
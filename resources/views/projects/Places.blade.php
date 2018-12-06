@extends('layout')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ubicaicion</title>
    <style>
      }
      .center {
        position: absolute;
        left: 15%;
        top: 30%;
      }
      .fondo{
        background-color: #418445; 
      }
      .back-bottom{
        position: absolute;
        bottom: 0px;
        
        font-size: 18px;
      }
    </style>
  </head>
  <form method="POST" action="/project/{{$project->id}}">
  {{method_field('PATCH')}}
  {{ csrf_field() }}

    <body class="fondo">
      <div class="container-fluid text-center bg-secondary">
        <div class="container text-white">
          <h2>Ubicaciones</h2>
        </div>
      </div>

    <div class="container text-center my-5">
      <div class="input-group-vertical input-group-lg">
        <div class="input-group-prepend my-5">
            <div class="input-group-text mx-auto">
              <div class="form-check">
                
                <input type="radio" name="Place" value="Playa">Playa
              </div>
            </div>
          </div>

          <div class="input-group-prepend my-5">
            <div class="input-group-text mx-auto">
              <div class="form-check">
               
                  <input type="radio" name="Place" value="Buscando delfines">Buscando delfines
              </div>
            </div>
          </div>

        <div class="input-group-prepend my-5">
            <div class="input-group-text mx-auto">
              <div class="form-check">
              
                <input type="radio" name="Place" value="Isla Pajaros">Isla Pajaros
              </div>
            </div>
          </div>

        <div class="input-group-prepend my-5">
            <div class="input-group-text mx-auto">
              <div class="form-check">
         
                <input type="radio" name="Place" value="Islote">Cayo arena
              </div>
            </div>
          </div>
      </div>
    
      
     <button type="submit" class="btn btn-primary">
                                    Enviar ubicacion
                                </button>

  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
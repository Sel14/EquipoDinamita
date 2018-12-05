<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Nuevo Lanchero</title>
    <style>
      }
      .center{
        position: relative;
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
      .enter{
        position: absolute;
        bottom: 0px;
        right: 0px;
        
      }

    </style>
  </head>
    <body class="fondo">

      <div class="container-fluid text-center bg-secondary">
        <div class="container text-white">
          <h2>Nuevo Lanchero</h2>
        </div>
      </div>
      
      <div method="POST" action="/project">
        {{ csrf_field() }}

      <div class="container my-5">
        <input type="text" class="form-control form-control-lg my-5" name="Name" placeholder="Nombre">
        

       
          <input type="email" class="form-control form-control-lg my-5" name="Phone" placeholder="Telefono">
        

        
          <input type="password" class="form-control form-control-lg my-5" name="Password" placeholder="Contraseña">

          <input type="password-confirm" class="form-control form-control-lg my-5" name="Password" placeholder="Confirmar contraseña">
        

      </div>


    
        <a class="btn btn-dark back-bottom" href="#" role="button" aria-pressed="false" autocomplete="off"">
          <h4>Exit</h4>
        </a>
      


      <button class="btn btn-dark btn-lg enter" type="summit" aria-pressed="false"><h4>Crear</h4></button>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

    
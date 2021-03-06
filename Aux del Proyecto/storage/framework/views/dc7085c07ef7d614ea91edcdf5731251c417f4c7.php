<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
      .bg{
        background-color: #418445; 
      }
      .center {
        position: absolute;
        left: 15%;
        top: 15%;
      }
      .back-bottom{
        position: absolute;
        bottom: 0px;
        
        font-size: 18px;
      }
    </style>
  </head>
  <body class="bg">
    <div class="container-fluid text-center bg-secondary">
      <div class="container text-white">
        <h3>Cuenta De Administrador</h3>
      </div>
    </div>

    <div class="center">
      <div class="container btn-group-vertical mx-auto">
        <a class="btn btn-dark my-5" href="/embarcaciones" role="button" aria-pressed="false" autocomplete="off">
          <h4>Embarcaciones</h4>
        </a>

        <a class="btn btn-dark my-5" href="/project/create" role="button" aria-pressed="false" autocomplete="off">
          <h4>Nuevo Lanchero</h4>
        </a>

        <a class="btn btn-dark my-5" href="/admin/chat" role="button" aria-pressed="false" autocomplete="off">
          <h4>Chat</h4>
        </a>
      </div>
    </div>


   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                         <button type="submit" class="btn btn-primary">
                                    cerrar sesion
                                </button>
                                    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ver Ubicaciones</title>
    <style>
      }
      .center{
        position: absolute;
        left: 15%;
        top: 30%;
      }
      .background{
        background-color: #418445; 
      }
      .back-bottom{
        position: absolute;
        bottom: 0px;
        
        font-size: 18px;
      }
      .borde{border: 1px #000 solid;}
    </style>
  </head>

  <body class="background">
    <div class="container-fluid text-center bg-secondary">
      <div class="container text-white">
        <h2>Ver Ubicaciones</h2>
      </div>
    </div>

    <div class="container">
      <table class="table table-striped table-dark">
        <thead class="thead-dark">
          <tr>
            <th><strong>Lanchero</strong></th>
            <th><strong>Ubicacion</strong></th>
          </tr>

        <tbody>

        <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
          <tr>
            <td><?php echo e($projects->name); ?></td>
            <td><?php echo e($projects->place); ?></td>
          </tr>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
        
      </table>

      <a class="btn btn-dark block" href="/admin/chat" role="button" aria-pressed="false" autocomplete="off"">
        <h4>Chat</h4>
      </a>

    </div>
    
    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php  //iniciar sesión y validar usuario y contraseña(el usuario es "admin" y la contraseña es "admin")
session_start();
if($_POST){

    $mensaje='Usuario o contraseña incorrectos!';

    if($_POST['usuario']=='admin' && $_POST['password']=='admin'){
        $_SESSION['usuario']=$_POST['usuario'];
        echo "Login correcto!";
        header('Location:secciones/index.php');
}
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <br>
        <form action="" method="post">
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">   <!-- Carta para log-in de usuario -->
                    Inicio de Sesión         
                </div>
                <div class="card-body"> 
                    <?php 
                    if(isset($mensaje)){?>
                    <div class="alert alert-danger" role="alert">   <!--Pequeño mensaje de alerta -->
                       <strong> <?php echo $mensaje; ?> </strong>
                    </div>
                    <?php } ?>
                    <div class="mb-3">      <!-- Input usuario -->
                      <label for="" class="form-label">Usuario</label>
                      <input type="text"
                        class="form-control" 
                        name="usuario" 
                        id="usuario" 
                        aria-describedby="helpId" 
                        placeholder="Usuario">
                      <small id="helpId" class="form-text text-muted">Escriba su nombre de usuario</small>
                    </div>
                    <div class="mb-3">  <!-- Input contraseña -->
                      <label for="" class="form-label">Contraseña</label>
                      <input type="password"
                        class="form-control" 
                        name="password" 
                        id="password" 
                        aria-describedby="helpId" 
                        placeholder="Password">
                      <small id="helpId" class="form-text text-muted">Escriba su contraseña</small>
                    </div>
                    <button type="submit" class="btn btn-primary"> Iniciar Sesión </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
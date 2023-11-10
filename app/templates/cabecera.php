<?php 
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('location:../index.php');
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
    <!-- Templeate del Header -->
    <nav class="navbar navbar-expand navbar-light bg-light">
                    <div class="nav navbar-nav">
                        <a class="nav-item nav-link active" href="index.php" aria-current="page">Inicio <span class="visually-hidden">(current)</span></a>
                        <a class="nav-item nav-link" href="control_profesores.php">Profesores</a>
                        <a class="nav-item nav-link" href="vista_control_alumnos.php">Alumnos</a>
                        <a class="nav-item nav-link" href="vista_busqueda_general.php">Búsqueda General</a>
                        <a class="nav-item nav-link" href="cerrar_sesion.php">Cerrar Sesión</a>
                    </div>
                </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
            <div class="row">
               
    
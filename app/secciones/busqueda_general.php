<?php
include_once '../configuraciones/database.php';
$conexionBD = DB::crearInstancia();

$id=isset($_POST['id'])?$_POST['id']:'';
$nombre=isset($_POST['nombre_alumno'])?$_POST['nombre_alumno']:'';
$apellidop=isset($_POST['apellidop_alumno'])?$_POST['apellidop_alumno']:'';
$apellidom=isset($_POST['apellidom_alumno'])?$_POST['apellidom_alumno']:'';

$accion=isset($_POST['accion'])?$_POST['accion']:'';

$listaAlumnos=array();
//print_r($_POST);

if($accion!=''){
    switch($accion){
        case 'buscar_a': //función del botón "Buscar en alumnos"
            $sql="SELECT * FROM alumnos WHERE alumnos.Id=:id_ OR alumnos.Nombre=:nombre OR alumnos.Apellido_p = :apellidop OR alumnos.Apellido_m = :apellidom ";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id_',$id);
            $consulta->bindParam(':nombre',$nombre);
            $consulta->bindParam(':apellidop',$apellidop);
            $consulta->bindParam(':apellidom',$apellidom);
            $consulta->execute();
            $listaAlumnos=$consulta->fetchAll();
        break;
        case 'buscar_p': //función del botón "Buscar en profesores"
            $sql="SELECT * FROM profesores WHERE profesores.Id_prof =:id_ OR profesores.Nombre=:nombre OR profesores.Apellido_p = :apellidop OR profesores.Apellido_m = :apellidom ";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id_',$id);
            $consulta->bindParam(':nombre',$nombre);
            $consulta->bindParam(':apellidop',$apellidop);
            $consulta->bindParam(':apellidom',$apellidom);
            $consulta->execute();
            $listaAlumnos=$consulta->fetchAll();
        break;
    }
}

//print_r($_POST);
//print_r($listaAlumnos);
?>

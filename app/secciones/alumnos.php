<?php
include_once '../configuraciones/database.php';
$conexionBD = DB::crearInstancia();


$id=isset($_POST['id'])?$_POST['id']:'';
$nombre=isset($_POST['nombre_alumno'])?$_POST['nombre_alumno']:'';
$apellidop=isset($_POST['apellidop_alumno'])?$_POST['apellidop_alumno']:'';
$apellidom=isset($_POST['apellidom_alumno'])?$_POST['apellidom_alumno']:'';

$accion=isset($_POST['accion'])?$_POST['accion']:'';

//print_r($_POST);

if($accion!=''){
    switch($accion){
        case 'agregar':      //función del botón 'agregar'
            $sql =" INSERT INTO alumnos (Id,Nombre,Apellido_p,Apellido_m) VALUES (NULL,:nombre,:apellidop,:apellidom)";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':nombre',$nombre);
            $consulta->bindParam(':apellidop',$apellidop);
            $consulta->bindParam(':apellidom',$apellidom);
            $consulta->execute();
        break;
        case 'editar':     //función del botón 'editar'
            $sql = "UPDATE alumnos SET Nombre=:nombre,Apellido_p=:apellidop, Apellido_m=:apellidom WHERE Id=:id_";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id_',$id);
            $consulta->bindParam(':nombre',$nombre);
            $consulta->bindParam(':apellidop',$apellidop);
            $consulta->bindParam(':apellidom',$apellidom);
            $consulta->execute();
            echo $sql;
        break;
        case 'borrar':     //función del botón 'borrar'
            $sql = "DELETE FROM alumnos WHERE Id=:id_";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id_',$id);
            $consulta->execute();
        break;

        case "Seleccionar":  //función del botón 'seleccionar'
            $sql="SELECT * FROM alumnos WHERE Id=:id_";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id_',$id);
            $consulta->execute();
            $alu = $consulta->fetch(PDO::FETCH_ASSOC);
            $nombre = $alu['Nombre'];
            $apellidop = $alu['Apellido_p'];
            $apellidom = $alu['Apellido_m'];
        break;

    }
}
//imprimir los datos de la base de datos

//print_r($_POST);
$consulta = $conexionBD->prepare("SELECT * FROM alumnos");
$consulta->execute();
$listaAlumnos=$consulta->fetchAll();

//print_r($listaAlumnos);
?>

<?php
include_once '../configuraciones/database.php';
$conexionBD = DB::crearInstancia();


$id=isset($_POST['id'])?$_POST['id']:'';
$nombre=isset($_POST['nombre_prof'])?$_POST['nombre_prof']:'';
$apellidop=isset($_POST['apellidop_prof'])?$_POST['apellidop_prof']:'';
$apellidom=isset($_POST['apellidom_prof'])?$_POST['apellidom_prof']:'';

$accion=isset($_POST['accion'])?$_POST['accion']:'';

//print_r($_POST);

if($accion!=''){
    switch($accion){
        case 'agregar': //función del botón 'agregar'
            $sql =" INSERT INTO profesores (Id_prof,Nombre,Apellido_p,Apellido_m) VALUES (NULL,:nombre,:apellidop,:apellidom)";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':nombre',$nombre);
            $consulta->bindParam(':apellidop',$apellidop);
            $consulta->bindParam(':apellidom',$apellidom);
            $consulta->execute();
        break;
        case 'editar': //función del botón 'editar'
            $sql = "UPDATE profesores SET Nombre=:nombre,Apellido_p=:apellidop, Apellido_m=:apellidom WHERE Id_prof=:id_";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id_',$id);
            $consulta->bindParam(':nombre',$nombre);
            $consulta->bindParam(':apellidop',$apellidop);
            $consulta->bindParam(':apellidom',$apellidom);
            $consulta->execute();
        break;
        case 'borrar': //función del botón 'borrar'
            $sql = "DELETE FROM profesores WHERE Id_prof=:id_";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id_',$id);
            $consulta->execute();
        break;
 
        case "Seleccionar": //función del botón 'seleccionar'
            $sql="SELECT * FROM profesores WHERE Id_prof=:id_";
            $consulta=$conexionBD->prepare($sql);
            $consulta->bindParam(':id_',$id);
            $consulta->execute();
            $profesor = $consulta->fetch(PDO::FETCH_ASSOC);
            $nombre = $profesor['Nombre'];
            $apellidop = $profesor['Apellido_p'];
            $apellidom = $profesor['Apellido_m'];
        break;

    }
}
//echo $id;

//imprimir los datos de la base de datos
//print_r($_POST);
$consulta = $conexionBD->prepare("SELECT * FROM profesores");
$consulta->execute();
$listaprof=$consulta->fetchAll();

//print_r($listaAlumnos);
?>

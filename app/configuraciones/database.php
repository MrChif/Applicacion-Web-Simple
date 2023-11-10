<?php
 class DB{

    public static $instancia=null;
    public static function crearInstancia(){
        
        if(self::$instancia==null){
            $opciones[PDO::ATTR_ERRMODE] = PDO:: ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=aplicacion','root','',$opciones);
            //echo '<script language="javascript">alert("Conectado!");</script>';
        }
        return self::$instancia;
    }
 }
?>
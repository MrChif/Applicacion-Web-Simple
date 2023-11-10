<?php
//finalizar sesión, llevar de nuevo al log-in
session_start();
session_destroy();
header('Location: ../index.php');
?>
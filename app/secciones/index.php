<?php include('../templates/cabecera.php'); ?>
<div class="row align-items-md-stretch">
    <div class="col-md-8">
        <div class="h-100 p-5 border rounded-3">
            <h2>Bienvenido!</h2>
            <div class="row">
            <div class="col-md-3"> <!--Botón para ir a "Alumnos"-->
                <a href="vista_control_alumnos.php">
                     <button type="button" name="" id="" class="btn btn-primary">Ir a Control de Alumnos</button>
                </a>
            </div>
            <div class="col-md-3"> <!--Botón para ir a "Profesores"-->
                <a href="control_profesores.php">
                     <button type="button" name="" id="" class="btn btn-primary">Ir a Control de Profesores</button>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/pie.php'); ?>
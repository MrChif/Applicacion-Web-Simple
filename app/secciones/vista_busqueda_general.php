<?php include('../templates/cabecera.php'); ?>
<?php include('../secciones/busqueda_general.php'); ?>

<div class="col-md-5">
  <form action="" method="post">
    <div class="card">
      <div class="card-header">
        Buscar en toda la base de datos
      </div>
      <div class="card-body">
        <div class="mb-3"> <!-- Input de control - clave -->
          <label for="" class="form-label">Clave</label>
            <input type="text"
              class="form-control" 
              name="id" 
              id="id"
              value = "<?php echo $id; ?>"
              aria-describedby="helpId" placeholder="ID">
              <div class="mb-3">   <!-- Input de control - nombre -->
          <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" 
              name="nombre_alumno" 
              id="nombre_alumno"
              value = "<?php echo $nombre; ?>" 
              aria-describedby="helpId" placeholder="Nombre">
      </div>
      <div class="mb-3">   <!-- Input de control - apellido paterno -->
          <label for="" class="form-label">Apellido Paterno</label>
            <input type="text"
              class="form-control" 
              name="apellidop_alumno" 
              id="apedillop_alumno"
              value = "<?php echo $apellidop; ?>"
              aria-describedby="helpId" placeholder="Apellido Paterno">
      </div>
      <div class="mb-3">   <!-- Input de control - apellido materno -->
          <label for="" class="form-label">Apellido Materno</label>
            <input type="text"
              class="form-control" 
              name="apellidom_alumno" 
              id="apellidom_alumno"
              value = "<?php echo $apellidom; ?>" 
              aria-describedby="helpId" placeholder="Apellido Materno">
      </div>
      <div class="text-center"> <!-- botones -->
        </div>
        <div class="btn-group" role="group" aria-label="">
          <button type="submit" name="accion" value="buscar_a" class="btn btn-primary">Buscar en Alumnos</button>
        </div>
        <div class="btn-group" role="group" aria-label="">
          <button type="submit" name="accion" value="buscar_p" class="btn btn-primary">Buscar en Profesores</button>
        </div>
      </div>
      </div>
    </div>
    </form>
  </div>
<br>
<div class="col-md-7">
  <table class="table">  <!-- Tabla de datos, que se enceuntran en la base de datos -->
    <thead>
      <tr>
        <th scope="col">Clave</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($listaAlumnos as $alumno){ ?>
      <tr class="">
        <td><?php  echo $alumno[0]?></td>
        <td><?php  echo $alumno['Nombre']?></td>
        <td><?php  echo $alumno['Apellido_p']?></td>
        <td><?php  echo $alumno['Apellido_m']?></td>
        <td>
        </td>
      <?php }?>
    </tbody>
  </table>
</div>



<?php include('../templates/pie.php'); ?>
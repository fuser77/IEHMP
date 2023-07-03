<?php include('db-crud.php'); ?>

<?php include('header_crud.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST"  enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" name="codigo" class="form-control" placeholder="codigo" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="titulo" class="form-control" placeholder="titulo" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="contenido" class="form-control" placeholder="contenido" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="año" class="form-control" placeholder="año" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="descripcion" class="form-control" placeholder="descripcion" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="fotografo" class="form-control" placeholder="fotografo" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="notas" class="form-control" placeholder="notas" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="descriptores" class="form-control" placeholder="descriptores" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="ejemplares" class="form-control" placeholder="ejemplares" autofocus>
          </div>
          <div class="form-group">
          <label for="imagen">Selecciona una imagen:</label>
          <input type="file" class="form-control-file" id="imagen" name="imagen">
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Subir">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>codigo</th>
            <th>titulo</th>
            <th>contenido</th>
            <th>año</th>
            <th>descripcion</th>
            <th>fotografo</th>
            <th>notas</th>
            <th>descriptores</th>
            <th>ejemplares</th>
            <th>Imagen</th>
            <th>Acciones</th>
            
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM repositorio";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['titulo']; ?></td>
            <td><?php echo $row['contenido']; ?></td>
            <td><?php echo $row['año']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['fotografo']; ?></td>
            <td><?php echo $row['notas']; ?></td>
            <td><?php echo $row['descriptores']; ?></td>
            <td><?php echo $row['ejemplares']; ?></td>
            <td> <img src="uploads<?php echo substr($row['imagen'], 7); ?>" alt="" width="100"></td>

           

            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('footer_crud.php'); ?>

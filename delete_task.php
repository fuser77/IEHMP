<?php

include("db-crud.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM repositorio WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Eliminado';
  $_SESSION['message_type'] = 'danger';
  header('Location: crud.php');
}

?>

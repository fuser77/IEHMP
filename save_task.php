<?php

include('db-crud.php');

if (isset($_POST['save_task'])) {
  $codigo = $_POST['codigo'];
  $titulo = $_POST['titulo'];
  $contenido = $_POST['contenido'];
  $año = $_POST['año'];
  $descripcion = $_POST['descripcion'];
  $fotografo = $_POST['fotografo'];
  $notas = $_POST['notas'];
  $descriptores = $_POST['descriptores'];
  $ejemplares = $_POST['ejemplares'];
  
 // subida de imagen al servidor
 $target_dir = "uploads/"; // carpeta donde se almacenará la imagen
 $target_file = $target_dir . basename($_FILES["imagen"]["name"]); // nombre del archivo
 $uploadOk = 1;
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // Verificar si es una imagen real o una imagen falsa
 if(isset($_POST["submit"])) {
   $check = getimagesize($_FILES["imagen"]["tmp_name"]);
   if($check !== false) {
     echo "El archivo es una imagen real - " . $check["mime"] . ".";
     $uploadOk = 1;
   } else {
     echo "El archivo no es una imagen real.";
     $uploadOk = 0;
   }
 }
 // Verificar si el archivo ya existe
 if (file_exists($target_file)) {
   echo "Lo siento, el archivo ya existe.";
   $uploadOk = 0;
 }
 // Verificar el tamaño máximo del archivo
 if ($_FILES["imagen"]["size"] > 50000000) {
   echo "Lo siento, su archivo es demasiado grande.";
   $uploadOk = 0;
 }
 // Permitir ciertos formatos de archivo
 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
   echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
   $uploadOk = 0;
 }
 // Verificar si $uploadOk es 0 por un error
 if ($uploadOk == 0) {
   echo "Lo siento, su archivo no fue cargado.";
 // si todo está bien, tratar de subir el archivo
 } else {
   if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
     echo "El archivo ". htmlspecialchars( basename( $_FILES["imagen"]["name"])). " ha sido cargado.";
   } else {
     echo "Lo siento, hubo un error al cargar su archivo.";
   }
 }

  $query = "INSERT INTO repositorio(codigo, titulo, contenido, año, descripcion, fotografo, notas, descriptores, ejemplares, imagen) VALUES ('$codigo', '$titulo', '$contenido', 
  '$año', '$descripcion', '$fotografo', '$notas', '$notas','$ejemplares', '$target_file')";

  


  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }


  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: crud.php');

}

?>

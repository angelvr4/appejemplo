<?php
  if(isset($_POST['nom']) && isset($_POST['acierto'])){
    $db = "phonegap";
    $host = "localhost";
    $user = "root";
    $pw = "";

    $con = mysqli_connect($host,$user,$pw, $db);

    $nombre = $_POST['nom'];
    $puntos = $_POST['acierto'];

    $insertar = "INSERT INTO resultados VALUES($nombre, $puntos)";

    $Ejecutar = mysqli_query($con, $insertar);
    if ($Ejecutar) {
      echo "Datos guardados";
    }else{
      echo "Error a guardar";
    }
  }else{
    echo "Error al guardar";
  }
 ?>

<?php
  //echo "<h1>Cookies con PHP</h1>";  

  //crear una cookie
  //setcookie('juanico', 'Juan', time() + (86400 * 30), "/"); // 86400 = 1 day

  //Crear una cookie - Parte 1
  $nombre = $_POST['nombre'];
  setcookie('nombre', $nombre, time() + 4800);

  if(isset($_COOKIE['nombre'])){
    echo "Hola " . $_COOKIE['nombre'] . "!";
  } else {
    echo "No has introducido ningún nombre.";
  }

?>

<?php
/*echo "<html>";
  echo "<head>";
      echo "<title>Establecimiento de Cookies con PHP</title>";
      echo "<meta charset=\"utf-8\" />";
  echo "</head>";
  echo "<body>";
  echo "<h1>Prueba desde PHP</h1>";
  echo "</body>";
echo "</html>";*/
?>
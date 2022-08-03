<?php
  //crear una cookie
  //setcookie('juanico', 'Juan', time() + (86400 * 30), "/"); // 86400 = 1 day

  //Crear una cookie - Parte 1
  $nombre = $_POST['nombre'];
  setcookie('nombre', $nombre, time() + 4800);

  //leer la cookie si existe - Parte 2
  if(isset($_COOKIE['nombre'])){
    echo "El valor de la cookie es {" . $_COOKIE['nombre'] . "}";
  } else {
    echo "No has introducido ningún nombre = {NULL}.";
  }

  //borrar cookie - Parte 3
  //Se borrar automáticamente cuando expiran su tiempo o bien poniendo el tiempo en negativo
  //Emplear al hacer un logout en la sesión del usuario
  //setcookie('nombre', '', time() - 1000);
  ?> <a href="index.php">Salir del sistema</a> <?php
  
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
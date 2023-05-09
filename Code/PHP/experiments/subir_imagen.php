<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verifica que el archivo se haya subido sin errores
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
  
  // Configura la ruta donde se guardará la imagen
  $ruta_destino = 'uploads/'.date('Y').'/'.date('m').'/';
  
  // Si la carpeta no existe, créala
  if (!file_exists($ruta_destino)) {
    mkdir($ruta_destino, 0777, true);
  }
  
  // Obtiene la extensión del archivo
  $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
  
  // Crea un nombre aleatorio para la imagen
  $nombre = 'en-conexion-'.uniqid().'-'.substr(md5(time()), 0, 8).'.'.$extension;
  
  // Mueve la imagen a la carpeta de destino con el nuevo nombre
  move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_destino.$nombre);
  
  // Construye la URL de la imagen a partir de la información que ya tienes
  $url_imagen = '/'.$ruta_destino.$nombre;
  
  // Imprime el nombre de la imagen para que puedas usarlo donde quieras
  echo $nombre;
}

$consulta = "INSERT INTO imagenes (url) VALUES ('$url_imagen')";

$resultado = mysqli_query($conexion, $consulta);
if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
} else {
    echo "Imagen guardada correctamente.";
}


?>
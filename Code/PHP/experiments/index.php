<!DOCTYPE html>
<html>
<head>
	<title>Subir imagen</title>
</head>
<body>
	<form action="subir_imagen.php" method="post" enctype="multipart/form-data">
		<label for="imagen">Seleccionar imagen:</label>
		<input type="file" name="imagen" id="imagen">
		<input type="submit" name="submit" value="Subir imagen">
	</form>
</body>
</html>

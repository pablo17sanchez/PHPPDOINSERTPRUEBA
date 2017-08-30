
<?php 
include_once("conexion.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 

if ($_POST) {
	# code...

try {
	

$nombre=isset($_POST['name'])? $_POST['name']:'';
$apellido=isset($_POST['lastname'])? $_POST['lastname']:'';
$email=isset($_POST['email'])? $_POST['email']:'';

$usuario=isset($_POST['usuario'])? $_POST['usuario']:'';
$contrasena=isset($_POST['contrasena'])? $_POST['contrasena']:'';


} catch (Exception $e) {
	

	echo "Error al inserta valor en las variables".$e->getMessage();
}

}
else {


echo "No hay datos pasados por el metodo post ";

}

$sqlinsert='INSERT INTO clientes(id, nombre, apellido, email, usuario, contrasena, telefono, movil, fax, direccion, codigopostal, polacion, cedula) VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)';

$statemen=$pdo->prepare($sqlinsert);
$statemen->execute(array($nombre,$apellido,$email,$usuario,$contrasena,'','','','','','',''));




 ?>

	
</body>
</html>
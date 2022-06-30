<?php
$con=mysqli_connect ("localhost", "root", "", "bdpersonal") or die("Error en la conexion con el servidor");
$sql="INSERT INTO datos
VALUES (null,'".$_POST["nombre"]."','".$_POST["Correo"]."','".$_POST["mensaje"]."')";

$resultado=mysqli_query($con,$sql) or die (`Error en el query database`);
mysqli_close($con);

echo 'Solicitud enviada, pronto obtendra una respuesta a su correo electronico';

?>
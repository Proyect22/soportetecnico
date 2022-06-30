<?php
$conex=mysqli_connect ("localhost", "root", "", "bdpersonal");

$usuario = $_POST ['usuario'];
$password = $_POST ['clave'];

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$password'";

$resultado = mysqli_query($conex, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas>0){
    header("location:home.html");
}

else{
    header("location:home2.html");
}

?>
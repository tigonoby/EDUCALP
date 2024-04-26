<?php
session_start();
include 'conexion.php';

if(isset($_POST['boton'])){  
$documento=$_POST['documento'];
$clave= $_POST['clave_us'];

$pass=md5($clave);

$consulta="SELECT * FROM `usuarios` WHERE `documento` = $documento AND `clave_us` = '$pass'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

echo $filas;

if($filas>0) {
    while($row=mysqli_fetch_array($resultado)){
    $_SESSION['id']=$row['id_user'];
    $_SESSION['nombre']=$row['nombre'];
    $_SESSION['apellido']=$row['apellido'];
    }
    header('location:muro.php');
}else{
    header('location: index.php');
}
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
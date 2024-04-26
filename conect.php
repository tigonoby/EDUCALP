<?php
session_start();
include "conexion.php";

if (isset($_POST['boton'])){
    
$clave = $_POST['clave_us'];
$clave2 = $_POST['clave2'];
    if ($clave == $clave2){
        $documento = $_POST['documento'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $clave = $_POST['clave_us'];

    $pass=md5($clave);

        
        
  $registro=mysqli_query($conexion,"INSERT INTO usuarios (documento, nombre, apellido, clave_us) VALUES ($documento,'$nombre','$apellido','$pass')") or die ($conexion."Problemas");
		
	

           
        echo "<script>alert('Registro Exitoso');</script>";
        echo "<script>window.location='index.php';</script>";
        
    }else{
        echo "<script>alert('Las contraseñas no son iguales');</script>";
        echo "<script>window.location='registro.php';</script>";
        
    }
}
?>
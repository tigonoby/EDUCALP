<?
include ('conexion.php');


if (isset($_POST['btn'])) {

	include 'conexion.php';
    $buscar = $_POST['search'];
    
    $consulta = mysqli_query($conexion,"SELECT * FROM usuarios WHERE nombre LIKE '%$buscar%'") or die($conexion."problemas en la consulta");

    while ($fila = mysqli_fetch_array($consulta)){
    
    $user = $fila['id_user'];	
	$nombre = $fila['nombre'];
    $apellido = $fila['apellido'];
    
    
	echo "<center>";
	echo "<br><br>";
	echo "<table border='4' width='60' height='40'>";
	echo"<tr>";
	echo "<td bgcolor='white'> <font face='Calibri'> <center> <h3> <font size='15'> <b>$user</b> </h1> </font> </center> </td>";
	echo "<td bgcolor='white'> <font face='Calibri'> <center> <h3> <font size='15'> <b>$nombre</b> </h1> </font> </center> </td>";
	echo "<td bgcolor='white'> <font face='Calibri'> <center> <h3> <font size='15'> <b>$apellido</b> </h1> </font> </center> </td>";


?>
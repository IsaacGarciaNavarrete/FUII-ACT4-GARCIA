<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$INE=$_POST['INE'];
$CURP=$_POST['CURP'];


$sql= "INSERT INTO empleado (nombre, apellido, edad, INE, CURP) VALUES ('$nombre','$apellido','$edad','$INE','$CURP')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>
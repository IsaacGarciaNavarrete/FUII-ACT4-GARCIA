<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$INE=$_POST['INE'];
$CURP=$_POST['CURP'];

$sql="UPDATE empleado SET  nombres='$nombres',apellidos='$apellidos',edad='$edad',INE='$INE',CURP='$CURP' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>
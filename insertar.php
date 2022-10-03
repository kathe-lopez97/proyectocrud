<?php
include("conexion.php");

$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$teléfono=$_POST['teléfono'];
$modelo=$_POST['modelo'];


$sql="INSERT INTO formulario VALUES('$id','$nombre','$teléfono','$modelo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}
?>
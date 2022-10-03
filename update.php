<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$teléfono=$_POST['teléfono'];
$modelo=$_POST['modelo'];

$sql="UPDATE formulario SET  nombre='$nombre',teléfono='$teléfono',modelo='$modelo' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
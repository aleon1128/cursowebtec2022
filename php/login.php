<?php
session_start();
include '../conect/conexion.php';
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
//echo "Las variables que enviaste son: ".$usuario." ".$contrasena;
$consulta=$Connection->query("select * from usuarios where id_usuario='$usuario' and password='$contrasena'");
$num_registros=mysqli_num_rows($consulta);
$registro=mysqli_fetch_assoc($consulta);
//echo "El número de registroes es: $num_registros";
if ($num_registros==1){
    $_SESSION['id_usuario']=$registro["id_usuario"];
    $_SESSION['nombre_completo']=$registro["nombre_completo"];
    $_SESSION['carrera']=$registro["carrera"];
    $_SESSION['nivel_acceso']=$registro["nivel_acceso"];
    $_SESSION['status']=$registro["status"];
    echo "1";
    //header('Location:../php/menu.php');
}else{
    echo "0";
}
?>
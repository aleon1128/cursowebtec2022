<?php
session_start();
include '../conect/conexion.php';
$nombre_semestre=$_POST['nombre_semestre'];
$year=date("Y");
$id_semestre=$year.$nombre_semestre;
switch($nombre_semestre){
    case '1': 
        $nombre_semestre="FEBRERO - JULIO".$year;
        break;
    case '2':
        $nombre_semestre="VERANO".$year;
        break;
    case'3':
        $nombre_semestre="AGOSTO - DICIEMBRE".$year;
        break;
}
$status_semestre='INACTIVO';
if($Connection->query("insert into semestre (id_semestre,nombre_semestre,status) values('$id_semestre','$nombre_semestre','$status_semestre')")){
    echo "1";
}else{
    echo "0";
}

//echo $nombre_semestre.' '.$status_semestre;
/*$contrasena=$_POST['contrasena'];
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
}*/
?>
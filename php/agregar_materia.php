<?php

session_start();
include '../conect/conexion.php';
$clave_materia=$_POST['clave_materia'];
$nombre_materia=$_POST['nombre_materia'];
$satca_materia=$_POST['satca_materia'];
$numerotemas_materia=$_POST['numerotemas_materia'];
$carrera_materia=$_POST['carrera_materia'];
$objetivo_materia=$_POST['objetivo_materia'];
$status_materia='ACTIVA';
if($Connection->query("insert into materias (clave_materia,nombre_materia,satca,numero_temas,carrera,objetivo_materia,status) values('$clave_materia','$nombre_materia','$satca_materia',$numerotemas_materia,'$carrera_materia','$objetivo_materia','$status_materia')")){
    echo "1";
}else{
    echo "0";
}

?>
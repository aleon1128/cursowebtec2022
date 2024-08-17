<?php 
$Hostname = "localhost";
$User = "root";
$Pass = "";
$DB = "gestor_actividades";
$Connection = new mysqli($Hostname,$User,$Pass,$DB, 3306);
if ($Connection->connect_errno) {
   echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    //echo "Error";
    exit();
} 
else
{
    //echo "Exito al conectar..";
}
$Connection->select_db($DB);
$Connection->set_charset('utf8');

//Old Connection
// mysqli_connect("localhost","iteran","iteran2019");
// mysqli_select_db("registro_aspirantes");
// mysqli_query("SET NAMES 'utf8'"); 
?>
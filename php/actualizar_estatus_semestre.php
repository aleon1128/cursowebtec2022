<?php
    //echo "El servidor responde";
    include '../conect/conexion.php';
    $id_semestre=$_POST['id_semestre'];
    $status_update=$_POST['status_update'];
    $consulta=$Connection->query("select * from semestre where status='ACTIVO'");  
    $num_registros=mysqli_num_rows($consulta);
    /*
    La variable $num_registros sirve para saber cuantos semestres hay activos
    si hay 0 semestres activos se activa el semestre seleccionado
    si hay 1 semestre activo y, el semestre seleccionado se desea Desactivar, se desactiva, ésto hace
    que vuelva a haber 0 semestres activos ya que sólo puede haber un semestre Activo
    */
    if($num_registros==0 or ($num_registros==1 and $status_update=="INACTIVO")){
        if($Connection->query("update semestre set status='$status_update' where id_semestre='$id_semestre'")){
            echo "1";
        }else{
            echo "0";
        }
    }else{
        //El -1 indica que ya hay un semestre activo y no puede haber más de uno Activo
        echo "-1";
    }
    
    
?>
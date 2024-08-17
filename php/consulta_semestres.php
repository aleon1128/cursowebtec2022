<?php
include '../conect/conexion.php';
$consulta_semestre=$Connection->query("select * from semestre");
//$registros=mysqli_fetch_assoc($consulta_semestre);
?>
<table class="table table-hover table-sm table-bordered" id="tabla_consulta_semestres">
				<thead>
					<tr>
						<th>
							Clave
						</th>
						<th>
							Nombre
						</th>
						<th>
							Estatus
						</th>
						<th>
							Acciones
						</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        while($registros=mysqli_fetch_assoc($consulta_semestre)){
                    ?>        
                    <tr>
						<td>
							<?php echo $registros['id_semestre'];?>
						</td>
						<td>
                            <?php echo $registros['nombre_semestre'];?>
						</td>
						<td>
                            <?php echo $registros['status'];?>
						</td>
						<td>
                            <?php if($registros['status']=="INACTIVO"){?>
							<img src="../img/poweron.png" alt="" width="15%" title="ACTIVAR" class="switch_btn" 
                            id_semestre="<?php echo $registros['id_semestre'];?>" status_update="ACTIVO">
                            <?php } ?>

                            <?php if($registros['status']=="ACTIVO"){?>
							<img src="../img/poweroff.png" alt="" width="15%" title="DESACTIVAR" class="switch_btn" id_semestre="<?php echo $registros['id_semestre'];?>" status_update="INACTIVO">
                            <?php } ?>
						</td>
					</tr>
                    <?php
                        }
                    ?>
				</tbody>
</table>
<script>
    $('#tabla_consulta_semestres').DataTable();
</script>
<?php
include '../conect/conexion.php';
$consulta_materias=$Connection->query("select * from materias");
//$registros=mysqli_fetch_assoc($consulta_semestre);
?>
<table class="table table-hover table-sm table-bordered" id="tabla_consulta_materias">
				<thead>
					<tr>
						<th>
							Clave
						</th>
						<th>
							Nombre
						</th>
						<th>
							Satca
						</th>
						<th>
							Número de Temas
						</th>
                        <th>
							Carrera
						</th>
						<th>
							Objetivo
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
                        while($registros=mysqli_fetch_assoc($consulta_materias)){
                    ?>        
                    <tr>
						<td>
							<?php echo $registros['clave_materia'];?>
						</td>
						<td>
                            <?php echo $registros['nombre_materia'];?>
						</td>
						<td>
                            <?php echo $registros['satca'];?>
						</td>
                        <td>
							<?php echo $registros['numero_temas'];?>
						</td>
						<td>
                            <?php echo $registros['carrera'];?>
						</td>
						<td>
                            <?php echo $registros['objetivo_materia'];?>
						</td>
                        <td>
                            <?php echo $registros['status'];?>
						</td>
						<td>
                            <?php if($registros['status']=="INACTIVA"){?>
							<img src="../img/poweron.png" alt="" width="15%" title="ACTIVAR" class="switch_btn" 
                            clave_materia="<?php echo $registros['clave_materia'];?>" status_update="ACTIVA">
                            <?php } ?>

                            <?php if($registros['status']=="ACTIVA"){?>
							<img src="../img/poweroff.png" alt="" width="15%" title="DESACTIVAR" class="switch_btn" clave_materia="<?php echo $registros['clave_materia'];?>" status_update="INACTIVA">
                            <?php } ?>
						</td>
					</tr>
                    <?php
                        }
                    ?>
				</tbody>
</table>
<script>
    $('#tabla_consulta_materias').DataTable();
</script>
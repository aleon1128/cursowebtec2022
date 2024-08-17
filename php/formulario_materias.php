<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
        <h4 class="text-center text-danger">FORMULARIO DE CAPTURA DE MATERIAS</h4>
    <form role="form" id="formulario_agregar_materia">
				<div class="form-group">

                    <label for="clave_materia">CLAVE DE LA MATERIA</label>
					<input type="text" class="form-control" name="clave_materia" id="clave_materia" required>
                </div>
                <div class="form-group">
                    <label for="nombre_materia">NOMBRE DE LA MATERIA</label>
					<input type="text" class="form-control" name="nombre_materia" id="nombre_materia" required>
                </div>
                <div class="form-group">
                    <label for="satca_materia">SATCA</label>
					<input type="text" class="form-control" name="satca_materia" id="satca_materia" required>
                </div>
                <div class="form-group">
                    <label for="numerotemas_materia">NÚMERO DE TEMAS</label>
					<input type="number" min="1" max="8" class="form-control" name="numerotemas_materia" id="numerotemas_materia" required>
                </div>
                <div class="form-group">
                      <label for="carrera_materia">CARRERA</label>
                      <select class="form-control" name="carrera_materia" id="carrera_materia" required>
                        <option value="">Selecciona la carrera</option>
                        <option value="INGENIERÍA EN SISTEMAS COMPUTACIONALES">INGENIERÍA EN SISTEMAS COMPUTACIONALES</option>
                        <option value="INGENIERÍA EN ELECTROMECÁNICA">INGENIERÍA EN ELECTROMECÁNICA</option>
                        <option value="INGENIERÍA EN INDUSTRIAS ALIMENTARIAS">INGENIERÍA EN INDUSTRIAS ALIMENTARIAS</option>
                        <option value="INGENIERÍA INDUSTRIAL">INGENIERÍA INDUSTRIAL</option>
                        <option value="INGENIERÍA EN GESTIÓN EMPRESARIAL">INGENIERÍA EN GESTIÓN EMPRESARIAL</option>
                        <option value="LICENCIATURA EN ADMINISTRACIÓN">LICENCIATURA EN ADMINISTRACIÓN</option>
                        <option value="GASTRONOMÍA">GASTRONOMÍA</option>
                        <option value="ARQUITECTURA">ARQUITECTURA</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="objetivo_materia">OBJETIVO DE LA MATERIA</label>
					<textarea cols="30" rows="3" class="form-control" name="objetivo_materia" id="objetivo_materia" required>
                    </textarea>
                </div>
                
				<hr>
				<button type="submit" class="btn btn-primary">
					Guardar
				</button>
	</form>
    </div>
    <div class="col-md-3">

    </div>
</div>
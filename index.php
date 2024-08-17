<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="js/jquery-3.6.0.js"></script>
	<script src="js/sweetalert.min.js"></script>
    <script src="js/login.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form role="form" id="login">
				<div class="form-group">
					 
					<label for="usuario">
						Usuario:
					</label>
					<input type="text" class="form-control" id="usuario" required/>
				</div>
				<div class="form-group">
					 
					<label for="contrasena">
						Contraseña:
					</label>
					<input type="password" class="form-control" id="contrasena" required/>
				</div>
                <hr>
				<button type="submit" class="btn btn-primary">
					Enviar
				</button>
			</form>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
</body>
</html>
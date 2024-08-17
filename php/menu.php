<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/menu.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">

    <div class="row align-items-center mt-4">
        <div class="col-md-2 text-center">
            <img src="../img/itscc-logo.png" class="img-fluid" width="50%" alt="">
        </div>
        <div class="col-md-8 text-center">
            <h4 class="text-center text-success"><?php echo $_SESSION['nombre_completo'];?> Bienvenido al sistema de planeación de actividades</h4>
        </div>
        <div class="col-md-2 text-center">
            <img src="../img/logout_icon.png" class="img-fluid" width="20%" id="logout" alt="Salir">
        </div>

    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <?php
            if ($_SESSION['nivel_acceso']=='jefe'){
        ?>
        <div class="col-md-2 text-center" id="semestre">
            <img src="../img/semestre.png" class="img-fluid" width="30%" alt="">
            <p>Semestres</p>
        </div>
        <div class="col-md-2 text-center" id="grupo">
        <img src="../img/grupos.png" class="img-fluid" width="30%" alt="">
            <p>Grupos</p>
        </div>
        <div class="col-md-2 text-center" id="materia">
        <img src="../img/materias.png" class="img-fluid" width="30%" alt="">
            <p>Materias</p>
        </div>
        <div class="col-md-2 text-center" id="consulta">
        <img src="../img/consultas.png" class="img-fluid" width="30%" alt="">
            <p>Consultas</p>
        </div>
        <?php
            }
        ?>
        <?php
            if ($_SESSION['nivel_acceso']=='docente'){
        ?>
        <div class="col-md-2">
            <img src="" alt=""> ALTAS docente
        </div>
        <div class="col-md-2">
            <img src="" alt=""> BAJAS docente
        </div>
        <div class="col-md-2">
            <img src="" alt="">CONSULTAS docente
        </div>
        <div class="col-md-2">
            <img src="" alt="">ELIMINAR docente
        </div>
        <?php
            }
        ?>
        <div class="col-md-2">

        </div>
    </div>
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10" id="dinamico">
           
        </div>
        <div class="col-md-1">

        </div>
    </div>
</div>
</body>
</html>
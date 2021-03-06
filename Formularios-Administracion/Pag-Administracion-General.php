<?php 
    session_start();  
    if (!isset($_SESSION["usuario"]))
        header("Location:no-autorizado.html");//Redireccion con PHP
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNAH Administracion</title>
    <link rel="icon" href="../Libreria/img/logo.ico">

    <link href="https://fonts.googleapis.com/css?family=K2D:200,400,700" rel="stylesheet" >

    <!--Arvhicos CSS-->
    <link rel="stylesheet" href="../Libreria/css/fontello.css">
    <link rel="stylesheet" href="../Libreria/css/font-awesome.css">
    <link rel="stylesheet" href="../Libreria/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Libreria/css/bootstrap-complements.css">
    <link rel="stylesheet" href="../Libreria/css/estilos.css">

    
    <link href="https://fonts.googleapis.com/css?family=K2D:200,400,700" rel="stylesheet" >
    <script src = "../Libreria/js/jquery-3.3.1.min.js"></script>
    <script src = "../Libreria/js/jquery.flexslider.js"></script>
    <script src = "../Libreria/js/main.js"></script>

    <style>
        .marketing .col-lg-3 {
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .marketing h2 {
            font-weight: 400;
        }
        .marketing .col-lg-3 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }
        .btn-secondary {
            color: #fff;
            font-weight: 600;
            background-color: #FFCC00;
            border-color: #FFCC00;
        }
        .btn-secondary:hover {
            background-color: rgb(0,36,132);
            border-color: rgb(0,36,132);
        }
        .btn-outline-success {
            color:white;
            font-weight: 600;
            background-color: rgb(0,36,132);
            border-color: rgb(0,36,132);
            background-image: none;
        }
        .btn-outline-success:hover {
            background-color: rgb(0,36,132);
            border-color: rgb(0,36,132);
            background-image: none;
        }
    </style>

</head>
<body style="font-family: 'K2D', sans-serif;">
    <!-- Header -->
    <div id="incluir-header">

    </div>

    <!-- Contenido -->
    <div class = "container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Cambio de Clave</h2>
                <img class="rounded-circle" src="../Libreria/img/img_20121002155038_94e702c9.png" alt="Generic placeholder image" width="140" height="140">
                <p> Realiza el cambio de tu clave de acceso al sistema.</p>
                <p style = "margin-top: 57px;"><a class="btn btn-secondary" href="#" role="button">Cambio Clave</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
              <h2>Listado De Edificios</h2>
              <img class="rounded-circle" src="../Libreria/img/lista-edificios.jpg" alt="Generic placeholder image" width="140" height="140">
              <p style = "margin-top: 10px;">Aqui puedes ver El listado de Edificios disponibles en el Alma Mater.</p>
              <p style = "margin-top: 57px;"><a class="btn btn-secondary" href="#" role="button">Lista De Secciones</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
              <h2>Creacion de Un nuevo Edificio</h2>
              <img class="rounded-circle" src="../Libreria/img/edificio1.jpg" alt="Generic placeholder image" width="140" height="140">
              <p style = "margin-top: 0px;">Aqui podras Inscribir o Habilitar Un Edificio nuevo para que entre en funcionamiento.</p>
              <p style = "margin-top: 57px;"><a class="btn btn-secondary" href="formulario-registro-edificio.php" role="button">Registro de Notas</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Creacion de Aulas</h2>
                <img class="rounded-circle" src="../Libreria/img/aulas.jpg" alt="Generic placeholder image" width="140" height="140">
                <p style = "margin-top: 20px;"><br>Aqui se podra crear una seccion con su debido catedratico en una asignatura especifica y cantidad de cupos solicitados.</p>
                <p style = "margin-top: 50px;"><a class="btn btn-secondary" href="formulario-registro-aula.php" role="button">Cancelar Asignaturas</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Ingreso de Personal Nuevo</h2>
                <img class="rounded-circle" src="../Libreria/img/Ingreso-personal.jpg" alt="Generic placeholder image" width="140" height="140">
                <p>
                    En este apartado podra Eliminar una seccion correspondiente a una asignatura especifica que tenga algun inconveniente ya sea por que no se cumple con los requisitos o por orden de Administracion.
                </p>
                <p style = "margin-top: 15px;"><a class="btn btn-secondary" href="formulario-registro-personal.php" role="button">Registro de Solicitudes</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Matricular Alumno</h2>
                <img class="rounded-circle" src="../Libreria/img/estudiante.png" alt="Generic placeholder image" width="140" height="140">
                <p>
                    En esta seccion podra Matricular a un alumno de primer ingreso para que de esta manera empiece su nueva historia en la Universidad como pasante de X carrera.
                </p>
                <p style = "margin-top: 15px;"><a class="btn btn-secondary" href="formulario-registro-alumno.php" role="button">Matricula Alumno</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Despido de Personal</h2>
                <img class="rounded-circle" src="../Libreria/img/despido.jpg" alt="Generic placeholder image" width="140" height="140">
                <p>
                    En este apartado podra Eliminar una seccion correspondiente a una asignatura especifica que tenga algun inconveniente ya sea por que no se cumple con los requisitos o por orden de Administracion.
                </p>
                <p style = "margin-top: 15px;"><a class="btn btn-secondary" href="#" role="button">Despedir Empleado</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Cerrar Sesion</h2>
                <img class="rounded-circle" src="../Libreria/img/cerrar-sesion.jpg" alt="Generic placeholder image" width="140" height="140">
                <p>
                    Cierra tu cuenta para no permitir que quede expuesta tu informacion y cambios realizados por ti.
                </p>
                <p style = "margin-top: 15px;"><a class="btn btn-secondary" href="exit.php" role="button">Cerrar Sesion</a></p>
            </div>
          </div>
    </div>
  
    <!-- Footer -->
    <div id="incluir-footer">

    </div>
  
    <script src="../Libreria/js/jquery-latest.js"></script>
    <script src="../Libreria/js/bootstrap.min.js"></script>
    <script src="../Libreria/header.js"></script>
    <script src="../Libreria/footer.js"></script>
</body>
</html>
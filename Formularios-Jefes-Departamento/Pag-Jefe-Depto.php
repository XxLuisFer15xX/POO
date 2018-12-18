<?php 
    session_start();  
    if (!isset($_SESSION["No_Cuenta"])){
        header("Location:no-autorizado.html");//Redireccion con PHP
    }
    $valor=$_SESSION["No_Cuenta"];
    //echo $valor;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNAH Jefes De Departamento</title>
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
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="img/imagen_catedratico.png" style="width:200px; left:200px; top:40px; display:block; position:absolute;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h2 style="text-align:center;">Datos Personales del Coordinador:</h2>
                <div id="contenido-usuarios">
                        <?php
                            $archivo = fopen("../Formularios-Administracion/data/registro_docente.json","r");
                            while(($linea = fgets($archivo))){
                                $registro = json_decode($linea,true);
                                if ($valor == $registro["No_Cuenta"]){
                                    echo    '<p><b>Nombres:     </b>'.$registro['nombre'].'</p><hr style="border: 1.2px solid #FFCC00;">
                                             <p><b>Apellidos:   </b>'.$registro['apellido'].'</p><hr style="border: 1.2px solid #FFCC00;">
                                             <p><b>Numero de Cuenta:     </b>'.$registro['No_Cuenta'].'</p><hr style="border: 1.2px solid #FFCC00;">
                                             <p><b>Cargo:      </b>'.$registro["jerarquia"].'</p><hr style="border: 1.2px solid #FFCC00;">
                                            ';  
                                    break;
                                } 
                            }
                            fclose($archivo);
                    ?>
                </div>
            </div>
        </div>
        <hr style="border:2px solid rgb(0,36,132);">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
              <h2>Lista de Secciones</h2>
              <img class="rounded-circle" src="../Libreria/img/Listado.jpg" alt="Generic placeholder image" width="140" height="140">
              <p style = "margin-top: 20px;">Aqui puedes ver Las secciones en la que Impartes Clases</p>
              <p style = "margin-top: 57px;"><a class="btn btn-secondary" href="#" role="button">Lista De Secciones</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Cambio de Clave</h2>
                <img class="rounded-circle" src="../Libreria/img/img_20121002155038_94e702c9.png" alt="Generic placeholder image" width="140" height="140">
                <p> Realiza el cambio de tu clave de acceso al sistema.</p>
                <p style = "margin-top: 57px;"><a class="btn btn-secondary" href="#" role="button">Cambio Clave</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
              <h2>Registrar Notas</h2>
              <img class="rounded-circle" src="../Libreria/img/matricula(1).png" alt="Generic placeholder image" width="140" height="140">
              <p style = "margin-top: 20px;">Aqui puedes Registrar las Notas de Las Clases Impartidas.</p>
              <p style = "margin-top: 57px;"><a class="btn btn-secondary" href="#" role="button">Registro de Notas</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Creacion de Secciones</h2>
                <img class="rounded-circle" src="../Libreria/img/secciones.jpg" alt="Generic placeholder image" width="140" height="140">
                <p style = "margin-top: 20px;"><br>Aqui se podra crear una seccion con su debido catedratico en una asignatura especifica y cantidad de cupos solicitados.</p>
                <p style = "margin-top: 50px;"><a class="btn btn-secondary" href="Formularios/Formulario-Creacion-Secciones.php" role="button">Cancelar Asignaturas</a></p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style = "text-align:center;">
                <h2>Eliminacion De Secciones</h2>
                <img class="rounded-circle" src="../Libreria/img/Eliminacion.png" alt="Generic placeholder image" width="140" height="140">
                <p>
                    En este apartado podra Eliminar una seccion correspondiente a una asignatura especifica que tenga algun inconveniente ya sea por que no se cumple con los requisitos o por orden de Administracion.
                </p>
                <p style = "margin-top: 15px;"><a class="btn btn-secondary" href="#" role="button">Registro de Solicitudes</a></p>
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
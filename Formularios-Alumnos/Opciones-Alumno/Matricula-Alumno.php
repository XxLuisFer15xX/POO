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
    <title>UNAH Alumnos</title>
    <link rel="icon" href="../../Libreria/img/logo.ico">

    <link href="https://fonts.googleapis.com/css?family=K2D:200,400,700" rel="stylesheet" >

    <!--Arvhicos CSS-->
    <link rel="stylesheet" href="../../Libreria/css/fontello.css">
    <link rel="stylesheet" href="../../Libreria/css/font-awesome.css">
    <link rel="stylesheet" href="../../Libreria/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Libreria/css/bootstrap-complements.css">
    <link rel="stylesheet" href="../../Libreria/css/estilos.css">

    
    <link href="https://fonts.googleapis.com/css?family=K2D:200,400,700" rel="stylesheet" >
    <script src = "../../Libreria/js/jquery-3.3.1.min.js"></script>
    <script src = "../../Libreria/js/jquery.flexslider.js"></script>
    <script src = "../../Libreria/js/main.js"></script>

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

        .caja {
            margin:20px auto 40px auto;	
            border:1px solid #d9d9d9;
            height:300px;
            overflow: hidden;
            width: 250px;
            position:relative;
        }
        select {
            background: transparent;
            border: none;
            font-size: 14px;
            height: 30px;
            padding: 5px;
            width: 250px;
        }
        select:focus{ outline: none;}

        .caja::after{
                content:"\025be";
                display:table-cell;
                padding-top:7px;
                text-align:center;
                width:30px;
                height:30px;
                background-color:#d9d9d9;
                position:absolute;
                top:0;
                right:0px;	
                pointer-events: none;
        }
    </style>

</head>
    <!-- Header -->
    <div id="incluir-header">

    </div>

    <!-- Contenido -->
    <div class = "container">
    <hr style="border:2px solid rgb(0,36,132);">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <img src="../img/imagen_alumno.png" style="width:200px; left:200px; top:40px; display:block; position:absolute;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <h2 style="text-align:center;">Datos Personales del Estudiante:</h2>
                <div id="contenido-usuarios">
                        <?php
                            $archivo = fopen("../../Formularios-Administracion/data/registro_alumno.json","r");
                            while(($linea = fgets($archivo))){
                                $registro = json_decode($linea,true);
                                if ($valor == $registro["No_Cuenta"]){
                                    echo    '
                                             <p><b>Nombres:     </b>'.$registro['nombre'].'</p><hr style="border: 1.2px solid #FFCC00;">
                                             <p><b>Apellidos:   </b>'.$registro['apellido'].'</p><hr style="border: 1.2px solid #FFCC00;">
                                             <p><b>Rango Universitario:      </b>'.$registro["jerarquia"].'</p><hr style="border: 1.2px solid #FFCC00;">
                                             <p><b>Centro de Estudios:   </b>'.$registro['centro'].'</p><hr style="border: 1.2px solid #FFCC00;">
                                             <p><b>Carrera:   </b>'.$registro['carrera'].'</p><hr style="border: 1.2px solid #FFCC00;">
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
                <div class="modal fade" id="ventana1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                  <h3>Sistema de Matricula UNAH</h3>
                                  <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
                              </div>
                              <!--contenido de la ventana-->
                                <div class="modal-body" style="display:inline-block;">
                                                
                                        <select name="carrera" id="carrera" class="caja">
                                            <option><?php
                                                $archivo = fopen("../../Formularios-Administracion/data/registro_alumno.json","r");
                                                while(($linea = fgets($archivo))){
                                                    $registro = json_decode($linea,true);
                                                    if ($valor == $registro["No_Cuenta"]){
                                                        echo    '
                                                                 <p><b>Carrera:   </b>'.$registro['carrera'].'</p><hr style="border: 1.2px solid #FFCC00;">
                                                                ';  
                                                        break;
                                                    } 
                                                }
                                                fclose($archivo);
                                                $carrera=$registro['carrera'];
                                                ?>
                                            </option>
                                        </select>   

                                        <select name="asignatura" id="asignatura" class="caja">
                                            <option>Asignatura</option>
                                            <?php
                                                $archivo = fopen("../Archivos-json-carrera/$carrera.json","r");
                                                while(($linea = fgets($archivo))){
                                                    $registro = json_decode($linea,true);
                                                    //if ($valor == $registro["No_Cuenta"]){
                                                        echo    '
                                                                 <option>'.$registro['codigo'] . " " . $registro['asignatura'].'</option>
                                                                ';  
                                                        //break;
                                                    //} 
                                                }
                                                fclose($archivo);
                                            ?>
                                            <script>
                                            
                                            </script>
                                        </select>
                                                    
                                        <select name="horario" id="horario" class="caja">
                                                <option>Horarios</option>
                                        </select>     
                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary">Guardar Informacion</button>
                            </div>
                        </div>
                   </div>
                </div>


            
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" style = "text-align:center;">
              <h2>Adicionar Asignatura</h2>
              <img class="rounded-circle" src="../../Libreria/img/libros.jpg" alt="Generic placeholder image" width="140" height="140">
              <p style = "margin-top: 10px;"><a class="btn btn-secondary" href="#ventana1" role="button" data-toggle="modal">Adicionar Asignatura</a></p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" style = "text-align:center;">
              <h2>Cancelar Asignatura</h2>
              <img class="rounded-circle" src="../../Libreria/img/cancelar.jpg" alt="Generic placeholder image" width="140" height="140">
              <p style = "margin-top: 10px;"><a class="btn btn-secondary" href="#modal1" role="button">Cancelar Asignatura</a></p>
            </div>
          </div>
    </div>

    <!-- Footer -->
    <div id="incluir-footer">

    </div>
  
    <script src="../../Libreria/js/jquery-latest.js"></script>
    <script src="../../Libreria/js/bootstrap.min.js"></script>
    <script src="../../Libreria/header.js"></script>
    <script src="../../Libreria/footer.js"></script>
</body>
</html>
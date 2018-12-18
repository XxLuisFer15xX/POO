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
    <title>UNAH Administracion</title>
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


        body{
            background-image: url("maxresdefault.jpg");
            font-family: Arial;
        }

        #main-container{
            margin: 150px auto;
            width: 1000px;
        }

        table{
            background-color: white;
            text-align: left;
            border-collapse: collapse;
            width: 1000px;
        }

        th, td{
            padding: 20px;
        }

        thead{
            background-color: #246355;
            border-bottom: solid 5px #FFCC00;
            color: white;
        }

        tr:nth-child(even){
            background-color: #ddd;
        }

        tr:hover td{
            background-color: #FFCC00;
            color: white;
        }
    </style>

</head>
<body style="font-family: 'K2D', sans-serif;">
    <!-- Header -->
    <div id="incluir-header">

    </div>

    <div class="container">
    <hr style="border:2px solid rgb(0,36,132);">
        <div class="row" style="background-color:#fff;">
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
                                            <p><b>No Cuenta:     </b>'.$registro['No_Cuenta'].'</p><hr style="border: 1.2px solid #FFCC00;">
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
        <div id="main-container">
                <table>
                    <thead style="background-color:rgb(0,36,132);">
                        <tr>
                            <th>Codigo</th><th>Asignatura</th><th>Seccion</th><th>Aula</th><th>HI</th><th>HF</th><th>Dias</th><th>Edificio</th>
                            <th>UV</th><th>OBS</th>
                        </tr>
                    </thead>
                    </tbody id="contenido-matricula">
                    <?php
                    $archivo = fopen("../data/registro_matricula.json","r");
                    $registro = array();
                    while(($linea=fgets($archivo))){
                        $registro = json_decode($linea,true);
                        if($valor==$registro['No_Cuenta']){
                            $var2 = $registro['codigo'];
                            $archivo2=fopen("../../Formularios-Jefes-Departamento/data/registro-seccion.json","r");
                            
                            while(($linea2=fgets($archivo2))){
                                $registro2=json_decode($linea2,true);
                                if($var2==$registro2['codigo']){
                                    echo   '<tr>
                                                <td>'.$registro2['codigo'].'</td><td>'.$registro2['asignatura'].'</td><td>'.$registro2['seccion'].'</td><td>'.$registro2['aula'].'</td><td>'.$registro2['horainicial'].'</td><td>'.$registro2['horafinal'].'</td><td>'.$registro2['dias'].'</td><td>'.$registro2['edificio'].'</td><td>'.$registro2['uv'].'</td><td>'.$registro2['obs'].'</td>
                                            </tr>';
                                }
                            }
                        }
                    }
                    fclose($archivo);
                    fclose($archivo2);
                        
                    ?>

                    <tbody>
                </table>
                <input type="button" class = "btn btn-secondary" onclick="location.href='Matricula-Alumno.php'" value="regresar">
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
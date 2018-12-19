<?php 
    session_start();  
    if (!isset($_SESSION["No_Cuenta"]))
        header("Location: no-autorizado.html");//Redireccion con PHP
        $valor=$_SESSION["No_Cuenta"];
     
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Historial UNAH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link href="css/historial.css" rel="stylesheet">
    <link rel="icon" href="../../Libreria/img/logo.ico">


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
</head>

<style>
  .dropdown:hover>.dropdown-menu{
    display: block;
  } 

</style>

   
<body style="background-image:url(wap.jpeg);">
    <div id="incluir-header">

    </div>

    <div id="loggin" class="padre"  style="background-color:rgba(0,36,132,0.8);">   
      <div id="loggin2" style="background-color:#D0E4FE">
          <table class="table  table-borderless table-sm" id="tabla-enc" style="background-color:#D0E4FE; color:black;">
            <?php
                  $archivo = fopen("../../Formularios-Administracion/data/registro_alumno.json","r");
                  while(($linea = fgets($archivo))){
                      $registro = json_decode($linea,true);
                      if ($valor == $registro["No_Cuenta"]){
                                    echo    
                                    '<h4 id="historial" style="color:black;"> Informacion General</h4> <hr>
                                    <thead>
                                      <tr>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">Carrera:</th>
                                        <td>'.$registro['carrera'].'</td>
                                        <th scope="row" >Centro:</th>
                                        <td>'.$registro['centro'].'</td>
                                        </tr>
                                      <tr>
                                        <th scope="row">Nombre:</th>
                                        <td>'.$registro['nombre'].' '.$registro['apellido'].'</td>
                                        <th scope="row" >Indice de Periodo:</th>
                                        <td>'.$registro['centro'].'</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Cuenta:</th>
                                        <td>'.$registro['No_Cuenta'].'</td>
                                        <th scope="row" >Indice de Global:</th>
                                        <td>'.$registro['centro'].'</td>
                                        
                                      </tr>
                                    </tbody>';
                                    break;
                                }
                            }
                            fclose($archivo);
                    ?>
              
            </table>
        
        </div>

          
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" >
              <a class="nav-link active his" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Historial Academico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link his" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Indice Academico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link his" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Indice de repitencia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link his" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Equivalencias</a>
            </li>
          </ul>
          <div class="tab-content " id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
                <table class="table table-bordered table-sm table-hover  ">
                <thead style="backgrpund-color:rgba(0,36,132,0.6);">
                  <tr style="color:black;">
                  <th scope="col" style="color:white;">Codigo</th>
                  <th scope="col" style="color:white;">Asignatura</th>
                  <th scope="col" style="color:white;">UV</th>
                  <th scope="col" style="color:white;">Seccion</th>
                  <th scope="col" style="color:white;">Año</th>
                  <th scope="col" style="color:white;">Periodo</th>
                  <th scope="col" style="color:white;">Calificacion</th>
                  <th scope="col" style="color:white;">OBS</th>
                  </tr>
                </thead>
                <?php
                            $archivo = fopen("../data/registro_matricula.json","r");
                            while(($linea = fgets($archivo))){
                                $registro = json_decode($linea,true);
                                if ($valor == $registro["No_Cuenta"]){
                                  $var2 = $registro['codigo'];
                                  $archivo2=fopen("../../Formularios-Jefes-Departamento/data/registro-seccion.json","r");   
                                  while(($linea2=fgets($archivo2))){
                                      $registro2=json_decode($linea2,true);
                                        if($var2==$registro2['codigo']){
                                          echo '<tbody style="color:black;">
                                            <tr style="color:white;">
                                              <th scope="row">1</th>
                                              <td>'.$registro2['asignatura'].'</td>
                                              <td>'.$registro2['uv'].'</td>
                                              <td>'.$registro2['seccion'].'</td>
                                              <td>'.$registro2['anio'].'</td>
                                              <td>'.$registro2['periodo'].'</td>
                                              <td></td>
                                              <td>'.$registro2['obs'].'</td>
                                            </tr>
                                            </tbody>';
                                       }
                                   }
                                }
                            }
                            fclose($archivo);
                    ?>
                  
                  </table>
                  <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li>
                      </ul>
                    </nav>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            <input type="button" class="btn btn-secondary" value="Regresar" onclick="location.href='Matricula-Alumno.php'">
          </div>
      </div>
      

      <br>
      <br>
      <br>


      <div id="incluir-footer">

      </div>


      <script src="../../Libreria/js/jquery-latest.js"></script>
      <script src="../../Libreria/js/bootstrap.min.js"></script>
      <script src="../../Libreria/header.js"></script>
      <script src="../../Libreria/footer.js"></script>
</body>
</html>
</html>
<?php
    include("../class/class-secciones.php");
    $s = new Seccion($_GET["carrera"],$_GET["codigo"],$_GET["seccion"],$_GET["asignatura"],$_GET["horainicial"],$_GET["horafinal"],$_GET["docente"],$_GET["edificio"],$_GET["aula"],$_GET["dias"],$_GET["periodo"],$_GET["uv"],$_GET["obs"]);
    echo $s->Registrar_Seccion();
?>
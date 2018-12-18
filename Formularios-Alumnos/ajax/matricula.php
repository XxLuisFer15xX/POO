<?php
    include("../class/class-matricula.php");
    $m = new Matricula($_GET["No_Cuenta"],$_GET["carrera"],$_GET["codigo"],$_GET["aula"]);
    echo $m->Registrar_Matricula();
?>
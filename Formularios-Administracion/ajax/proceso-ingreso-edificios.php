<?php
    include("../class/clase-edificio.php");
    $a = new Edificio($_GET["ID_edificio"],$_GET["nombreEdificio"],$_GET["centroRegional"]);
    echo $a->Registrar_Edificio();
?>
<?php
    function generarCodigo() {
        $longitud;
        $key = 'UNAH_';
        $pattern = '2018';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }
 
echo generarCodigo(6); // genera un código de 6 caracteres de longitud.
?>
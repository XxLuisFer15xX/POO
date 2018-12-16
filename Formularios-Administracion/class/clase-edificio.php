<?php
    class Edificio{
        private $ID_edificio;
        private $nombreEdificio;
        private $centroRegional;
        
        public function __construct($ID_edificio=null,$nombreEdificio=null,$centroRegional=null){
            $this->ID_edificio=$ID_edificio;
            $this->nombreEdificio=$nombreEdificio;
            $this->centroRegional=$centroRegional;
            
        }
        public function getID_edificio(){
            return $this->ID_edificio;
        }
        public function setID_edificio($ID_edificio){
            $this->ID_edificio = $ID_edificio;
        }
        public function getnombreEdificio(){
            return $this->nombreEdificio;
        }
        public function setnombreEdificio($nombreEdificio){
            $this->nombreEdificio = $nombreEdificio;
        }
        public function getcentroRegional(){
            return $this->centroRegional;
        }
        public function setcentroRegional($centroRegional){
            $this->centroRegional = $centroRegional;
        }

        public function Registrar_Edificio(){
            $archivo = fopen("../data/registro_edificio.json","a+");
            $arreglo = array();
            $arreglo["ID_edificio"]=$this->ID_edificio;
            $arreglo["nombreEdificio"]=$this->nombreEdificio;
            $arreglo["centroRegional"]=$this->centroRegional;
            

            fwrite($archivo,json_encode($arreglo) ."\n");
            fclose($archivo);
            return json_encode($arreglo);
        }
        public function __toString(){
            return "$this->ID_edificio,$this->nombreEdificio,$this->centroRegional";
        }
    }
?>
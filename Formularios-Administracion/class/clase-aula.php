<?php
    class Edificio{
        private $ID_aula;
        private $numeroAula;
        private $ID_edificio;
        private $nombreEdificio;
        private $centroRegional;
        
        public function __construct($ID_aula=null,$numeroAula=null,$ID_edificio=null,$nombreEdificio=null,$centroRegional=null){
            $this->ID_aula=$ID_aula;
            $this->numeroAula=$numeroAula;
            $this->ID_edificio=$ID_edificio;
            $this->nombreEdificio=$nombreEdificio;
            $this->centroRegional=$centroRegional;
            
        }

        public function getID_aula(){
            return $this->ID_aula;
        }
        public function setID_aula($ID_aula){
            $this->ID_aula = $ID_aula;
        }
        public function getnumeroAula(){
            return $this->numeroAula;
        }
        public function setnumeroAula($numeroAula){
            $this->numeroAula = $numeroAula;
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

        public function Registrar_Aula(){
            $archivo = fopen("../data/registro_edificio.json","a+");
            $arreglo = array();
            $arreglo["ID_aula"]=$this->ID_aula;
            $arreglo["numeroAula"]=$this->numeroAula;
            $arreglo["ID_edificio"]=$this->ID_edificio;
            $arreglo["nombreEdificio"]=$this->nombreEdificio;
            $arreglo["centroRegional"]=$this->centroRegional;
            

            fwrite($archivo,json_encode($arreglo) ."\n");
            fclose($archivo);
            return json_encode($arreglo);
        }
        public function __toString(){
            return "$this->ID_aula,$this->numeroAula,ID_edificio,$this->nombreEdificio,$this->centroRegional";
        }
    }
?>
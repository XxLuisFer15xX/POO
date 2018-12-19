<?php
    class Seccion{
        private $carrera;
        private $codigo;
        private $seccion;
        private $asignatura;
        private $horainicial;
        private $horafinal;
        private $periodo;
        private $anio;
        private $docente;
        private $edificio;
        private $aula;
        private $dias;
        private $uv;
        private $obs;

        public function __construct($carrera=null,$codigo=null,$seccion=null,$asignatura=null,$horainicial=null,$horafinal=null,$docente=null,$edificio=null,$aula=null,$dias=null,$periodo=null,$anio=null,$uv=null,$obs=null){
            $this->carrera=$carrera;
            $this->codigo=$codigo;
            $this->seccion=$seccion;
            $this->asignatura=$asignatura;
            $this->horainicial=$horainicial;
            $this->horafinal=$horafinal;
            $this->docente=$docente;
            $this->edificio=$edificio;
            $this->aula=$aula;
            $this->dias=$dias;
            $this->periodo=$periodo;
            $this->uv=$uv;
            $this->obs=$obs;
            $this->anio=$anio;
        }
        public function getcarrera(){
            return $this->carrera;
        }
        public function setcarrera($carrera){
            $this->carrera=$carrera;
        }
        public function getasignatura(){
            return $this->asignatura;
        }
        public function setasignatura($asignatura){
            $this->asignatura=$asignatura;
        }
        public function gethorainicial(){
            return $this->horainicial;
        }
        public function sethorainicial($horainicial){
            $this->horainicial=$horainicial;
        }
        public function gethorafinal(){
            return $this->horafinal;
        }
        public function sethorafinal($horafinal){
            $this->horafinal=$horafinal;
        }
        public function getdocente(){
            return $this->docente;
        }
        public function setdocente($docente){
            $this->docente=$docente;
        }
        public function getedificio(){
            return $this->edificio;
        }
        public function setedificio($edificio){
            $this->edificio=$edificio;
        }
        public function getaula(){
            return $this->aula;
        }
        public function setaula($aula){
            $this->aula=$aula;
        }
        public function getdias(){
            return $this->dias;
        }
        public function setdias($dias){
            $this->dias=$dias;
        }
        public function getcodigo(){
            return $this->codigo;
        }
        public function setcodigo($codigo){
            $this->codigo=$codigo;
        }
        public function getseccion(){
            return $this->seccion;
        }
        public function setseccion($seccion){
            $this->seccion=$seccion;
        }
        public function getperiodo(){
            return $this->periodo;
        }
        public function setperiodo($periodo){
            $this->periodo=$periodo;
        }
        public function getuv(){
            return $this->uv;
        }
        public function setuv($uv){
            $this->uv=$uv;
        }
        public function getobs(){
            return $this->obs;
        }
        public function setobs($obs){
            $this->obs=$obs;
        }
        public function getanio(){
            return $this->anio;
        }
        public function setanio($anio){
            $this->anio=$anio;
        }
        public function Registrar_Seccion(){
            $archivo = fopen("../data/registro-seccion.json","a+");
            $arreglo = array();
            $arreglo["carrera"]=$this->carrera;
            $arreglo["codigo"]=$this->codigo;
            $arreglo["seccion"]=$this->seccion;
            $arreglo["asignatura"]=$this->asignatura;
            $arreglo["horainicial"]=$this->horainicial;
            $arreglo["horafinal"]=$this->horafinal;
            $arreglo["docente"]=$this->docente;
            $arreglo["edificio"]=$this->edificio;
            $arreglo["aula"]=$this->aula;
            $arreglo["dias"]=$this->dias;
            $arreglo["periodo"]=$this->periodo;
            $arreglo["uv"]=$this->uv;
            $arreglo["obs"]=$this->obs;
            $arreglo["anio"]=$this->anio;
            

            fwrite($archivo,json_encode($arreglo) ."\n");
            fclose($archivo);
            return json_encode($arreglo);
        }
        public function __toString(){
            return "$this->carrera,$this->asignatura,$this->seccion,$this->horainicial,$this->horafinal,$this->docente,$this->edificio,$this->aula,$this->dias,$this->periodo,$this->uv,$this->obs,$this->anio";
        }

    }
?>
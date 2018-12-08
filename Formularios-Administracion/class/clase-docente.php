<?php
include("clase-persona.php");

class Docencia extends Persona{
    protected $jerarquia;
    protected $key;
    //Generador de codigo
    function generarCodigo($longitud) {
        $key = '';
        $pattern = '201519000';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }

    public function __construct($nombre=null,$apellido=null,$direccion=null,$telefono=null,$edad=null,$correo=null,$password=null,$sexo=null,$estado_civil=null,$fecha_ingreso=null,$jerarquia){
        parent::__construct($nombre,$apellido,$direccion,$telefono,$edad,$correo,$password,$sexo,$estado_civil,$fecha_ingreso);
        $this->jerarquia=$jerarquia;
    }
    public function __toString(){
        return parent::__toString() . ",$this->jerarquia,$key";
    }
    public function getJerarquia(){
        return $this->jerarquia;
    }
    public function setJerarquia($jerarquia){
        $this->jerarquia = $jerarquia;
    }
    public function getObtenerkey(){
        return $this->key;
    }
    public function setObtenerkey($key){
        $this->key=$key;
    }

    public function Habilitar_Docente(){
        $archivo = fopen("../data/registro_docente.json","a+");
        $arreglo = array();
        $arreglo["No_Cuenta"]=$this->key;
        $arreglo["jerarquia"]=$this->jerarquia;
        fwrite($archivo, json_encode($arreglo) . "\n");
        fclose($archivo);
        return json_encode($arreglo);
    }
}

?>
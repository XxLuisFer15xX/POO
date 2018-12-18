<?php

class Matricula{
    private $No_Cuenta;
    private $carrera;
    private $codigo;
    private $aula;



    public function __construct($No_Cuenta=null,$carrera=null,$codigo=null,$aula=null){
        $this->No_Cuenta=$No_Cuenta;
        $this->carrera=$carrera;
        $this->codigo=$codigo; 
        $this->aula=$aula;       
    }
    public function getNo_Cuenta(){
        return $this->No_Cuenta;
    }
    public function setNo_Cuenta($No_Cuenta){
        $this->No_Cuenta = $No_Cuenta;
    }
    public function getcarrera(){
        return $this->carrera;
    }
    public function setcarrera($carrera){
        $this->carrera = $carrera;
    }
    public function getcodigo(){
        return $this->codigo;
    }
    public function setcodigo($codigo){
        $this->codigo = $codigo;
    }
    public function getaula(){
        return $this->aula;
    }
    public function setaula($aula){
        $this->aula = $aula;
    }
    public function Registrar_Matricula(){
        $archivo = fopen("../data/registro_matricula.json","a+");
        $arreglo = array();
        $arreglo["No_Cuenta"]=$this->No_Cuenta;
        $arreglo["carrera"]=$this->carrera;
        $arreglo["codigo"]=$this->codigo;
        $arreglo["aula"]=$this->aula;

        fwrite($archivo,json_encode($arreglo) ."\n");
        fclose($archivo);
        return json_encode($arreglo);
    }
    public function __toString(){
        return "$this->No_Cuenta,$this->carrera,$this->codigo,$this->aula";
    }


}


?>
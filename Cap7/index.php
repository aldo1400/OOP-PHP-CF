<?php
/**
 *
 */
interface Auto
{
  public function encender();
  public function apagar();
}

interface gasolina extends Auto{
  public function vaciarTanque();
  public function llenarTanque($cant);
}

class Deportivo implements gasolina
{

  private $estado=false;
  private $tanque=0;

  public function estado(){
    if($this->estado)
    {
      print "El auto esta encendido y tiene ".$this->tanque."de litro de tanque";
    }
    else {
      print "El auto esta apagado";
    }
  }
  public function encender(){
    if($this->estado)
    {
      print "No puedes encender el auto 2 veces <br>";
    }
    else {
      if($this->tanque<=0)
      {
        print "Usted no puede encender el auto porque el tanque esta vacio";
      }
      else {
        print "Auto encedido <br>";
        $this->estado=true;
      }

    }
  }

  public function apagar(){
    if($this->estado)
    {
      print "Auto apagado <br>";
      $this->estado=false;
    }
    else {
      print "El auto ya esta apagado <br>";
    }
  }
  public function vaciarTanque(){
    $this->tanque=0;
  }
  public function llenarTanque($cant){
    $this->tanque=$cant;
  }

  public function usar($km){
    if ($this->estado) {
      $reducir=$km/3;
      $this->tanque=$this->tanque-$reducir;
      if ($this->tanque<=0)
        $this->estado=false;

    }
    else {
      print "El auto esta apagado y no se puede usar <br>";
    }
  }
}

$obj=new Deportivo();
$obj->llenarTanque(100);
$obj->encender();
$obj->usar(120);
$obj->estado();
 ?>

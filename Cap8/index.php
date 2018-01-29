<?php
abstract class Molde
{

  abstract public function ingresarNombre($nombre);
  abstract public function obtenerNombre();

}

/**
 *
 */
class Persona extends Molde
{
    private $mensaje="Hola gente de codigo facilito";
    private $nombre;
    public function mostrar(){
      print $this->mensaje;
    }

    public function ingresarNombre($nombre,$username=" cf"){
      $this->nombre=$nombre.$username;
    }
    public function obtenerNombre(){
      print $this->nombre;
    }

}

$obj=new Persona();
$obj->ingresarNombre("Carlos","Fernandes");
$obj->obtenerNombre();

 ?>

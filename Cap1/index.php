<?php

/**
 *
 */
class Persona
{

  public $nombre="Pedro";

  public function hablar($mensaje)
  {
      echo $mensaje;
  }
}

$persona=new Persona();
echo $persona->nombre.'<br>';
$persona->hablar("Saludos desde codigo facilito");

 ?>

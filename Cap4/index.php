<?php
/**
 *
 */
class Facebook
{
  public $nombre;
  public $edad;
  private $pass;

  public function __construct($nombre,$edad,$pass)
  {
    $this->nombre=$nombre;
    $this->edad=$edad;
    $this->pass=$pass;
  }
  public function verInformacion(){
    echo "Nombre: ".$this->nombre."<br>";
    echo "Edad: ".$this->edad."<br>";

    $this->cambiarPass("aldo123");
    echo "Password: ".$this->pass."<br>";
  }
  public function cambiarPass($pass){
    $this->pass=$pass;
  }
}

$facebook=new Facebook("Carlos Fernandes",20,"1234");

$facebook->verInformacion();

 ?>

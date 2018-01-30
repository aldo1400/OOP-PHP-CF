<?php namespace Models;

/**
 *
 */
class Conexion
{
  private $datos= array(
    "host" =>"locahost" ,
    "user"=>"root",
    "pass"=>"carfer",
    "db"=>"proyecto"
 );

 private $con;

 public function __construct(){
   $this->con=new mysqli($this->datos['host'],
   $this->datos['user'],$this->['pass'],$this->datos['db']);
 }

}

 ?>

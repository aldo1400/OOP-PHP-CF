<?php

/**
 *
 */
class Pagina
{

  public $nombre="Codigo facilito";
  public static $url="www.codigofacilito.com";

  public function bienvenida(){
    echo "Bienenidos a <br>".$this->nombre."<br> la pagina es <br>".self::url."<br>";

  }
  public static function bienvenida2(){

    echo "Bienvenidos".self::$url."<br>";
  }

}

/**
 *
 */
class Web extends Pagina
{


}

Web::bienvenida2();
 ?>

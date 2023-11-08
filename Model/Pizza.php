<?php

class Pizza extends Pietanza{
  public $impasto;
  public $dimensione;

  public function __construct(string $_impasto, string $_dimensione, string $_name, array $_ingredients, Media $_image=null, float $_prezzo_vendita, float $_prezzo_costo){
    $this->impasto = $_impasto;
    $this->dimensione = $_dimensione;

    parent::__construct($_name, $_ingredients, $_image, $_prezzo_vendita, $_prezzo_costo);
  }

  public function getFullInfo(){
    $pietanzaInfo = parent::getFullInfo();
    return "$pietanzaInfo $this->impasto $this->dimensione";
  }

}
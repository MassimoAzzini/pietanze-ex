<?php

class Pasta extends Pietanza{
  public $formato;
  public $farina;
  public $tempo_cottura;

  public function __construct(string $_name, array $_ingredients, Media $_image=null, float $_prezzo_vendita, float $_prezzo_costo, string $_formato, string $_farina){
    $this->formato = $_formato;
    $this->farina = $_farina;

    parent::__construct( $_name, $_ingredients, $_image, $_prezzo_vendita, $_prezzo_costo);
  }

    public function getFullInfo(){
      $pietanzaInfo = parent::getFullInfo();
      return "$pietanzaInfo $this->formato $this->farina";
    }
};
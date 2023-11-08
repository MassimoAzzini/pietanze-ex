<?php 

trait Prezzo{
  public $prezzo_costo;
  public $prezzo_vendita;

  public function getGain(){
    return $this->prezzo_vendita - $this->prezzo_costo;
  }
}

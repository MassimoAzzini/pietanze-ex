<?php 

  class Pietanza{

    use Prezzo;

    public $name;
    public $ingredients;
    public $image;

    public function __construct(string $_name, array $_ingredients, Media $_image=null, float $_prezzo_vendita, float $_prezzo_costo)
    {
      $this->name = $_name;

      if(empty($_ingredients)){
        throw new Exception("Ci deve essere almeno 1 ingrediente");
      }else{
        $this->ingredients = $_ingredients;
      }

      $this->image = $_image;
      $this->prezzo_vendita = $_prezzo_vendita;
      $this->prezzo_costo = $_prezzo_costo;

    }

    public function setImage(Media $_image){ 
      $this->image = $_image;
    }

    public function getFullInfo(){
      return "Nome: $this->name, Prezzo: $this->prezzo_vendita  Ingredienti:" . implode(", ", $this->ingredients);

    }
      
  };



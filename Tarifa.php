<?php 

class Tarifa{

  private $valortarifa;
    public function getValortarifa()
    {
       return $this->valortarifa;
    
    }
      public function setValortarifa($valor){
          $this->valortarifa = $valor;
    } 


  public function CalculoTarifa() {
    $tarifa = 12000;
   if($this->getValortarifa() <=5) {

      echo "Tu función es gratis!!!";
   } elseif($this->getValortarifa() <=12){
    echo "Tu función es a mitad de precio!";
    $total = ($tarifa / 2);
    echo "su tarifa es : " . $total;
 } elseif ($this->getValortarifa()<=54) {
    echo "debes pagar el total de la funcion que son " . $tarifa;
 }else {
     echo "Tu función el gratis!!!";
 }

 }


}




?>

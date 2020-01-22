<?php

if(isset($_POST["btncalcular"])) {

    require_once 'Tarifa.php';

    $tarifa= new Tarifa();

    $valor = $_POST["txtedad"];
     
    $tarifa->setValortarifa($valor);

    $tarifa->CalculoTarifa();
    
    echo "<br>";

     

}else {

 echo "valor invalido";

}

?>

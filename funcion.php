<?php

function retirarDinero($monto) {
    $billetesDisponibles = array(100, 50, 20, 10);
    $retiro = array(); 

    foreach ($billetesDisponibles as $billete) {
        for ($cantidad = floor($monto / $billete); $cantidad > 0; $cantidad--) {
            array_push($retiro, $billete);
            $monto -= $billete;
        }
    }

    if ($monto != 0) {
        echo "No es posible retirar esa cantidad con los billetes disponibles.";
    } else {
        echo "Se han retirado los siguientes billetes:<br>";
        foreach ($retiro as $billete) {
            echo "$billete<br>";
        }
    }
}

?>

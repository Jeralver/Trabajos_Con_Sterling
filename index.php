<?php
function cajero()
{
    $saldo = 10;

    while (true) {
        echo "1.Consultar el Saldo \n";
        echo "2.Consignar Dinero \n";
        echo "3.Retirar Dinero \n";
        echo "4.Exiting \n";
        

        $user = intval(readline("Ingrese una de las opciones; "));
        if ($user == 1) {
            echo "Su saldo actual es de: $saldo \n";
        } elseif ($user == 2) {
            $consignar = intval(readline("Ingrese el monto que sedea consignar: "));
            if ($consignar > 0) {
                $saldo = $consignar + $saldo;
                echo "Su consignación es de: $consignar \n";
                echo "Su saldo total es de: $saldo \n";
            }
        } elseif ($user == 3) {
            $retirar = intval(readline("Ingrese el monto que se desea retirar: "));
            if ($retirar > 0  && $saldo!=0) {
                $saldo = $saldo - $retirar;
                echo "Su retiro es de: $retirar \n";
                echo "Su saldo total es de: $saldo \n";
            }
            else {
                echo "Ingrese un monto mayor a 0 o saldo insuficiente \n";
            }
        } elseif ($user == 4) {
            echo "Gracias por usar nuestros servicios \n";
            break;
        } else {
            echo "Ingrese una opcion valida \n";
        }
    }
}

cajero();

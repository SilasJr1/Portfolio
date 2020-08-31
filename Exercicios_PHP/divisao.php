<?php

class Funcoes {

    function divisao($n1, $n2) {

        $i = 0;

        if ($n1 >= $n2 && $n2 != 0) {
            $resto = ($n1%$n2);
            $aux = $n1 - $resto;
        do {
            $aux = $aux - $n2;
            $i++;
        } while($aux > 0);
        }

        if ($n2 == 0) {
            return "O denominador deve ser diferente de 0.";
        }
        
        return $i;
    }
}


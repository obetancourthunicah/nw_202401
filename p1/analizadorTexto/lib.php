<?php
    function analizarTexto($rawTexto) {
        $arrPalabras = explode(" ",$rawTexto);
        return frecuenciasPalabras($arrPalabras);
    }
    function extraerPalabrasPorExpresionRegular($rawTexto, $expresionRegular) {
        $arrPalabras = preg_split($expresionRegular, $rawTexto);
        return frecuenciasPalabras($arrPalabras);
    }
    function frecuenciasPalabras($arrPalabras) {
        $arrFrecuencias = [];
        foreach($arrPalabras as $palabra) {
            if(isset($arrFrecuencias[$palabra])) {
                $arrFrecuencias[$palabra] ++;
            } else {
                $arrFrecuencias[$palabra] = 1;
            }
        }
        return $arrFrecuencias;
    }
?>
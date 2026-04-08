<?php

class Recursos {


// partitures disp per a mes d'un instrument 

public static function partituraPerInstrument($lista, $instrument) {

    $resultado = [];

    foreach ($lista as $p) {
        if ($p->getInstrumento() == $instrument) {
            $resultado[] = $p;
        }
    } return $resultado;
}



//retorna partitures de X autor 
public static function partituraPerAutor($lista, $autor) {

    $resulado = [];

    foreach ($lista as $p) { 
        if ($p->getAutor() == $autor) {
            $resultado[] = $p;
        }
    } return $resulado;
}




}
<?php

class Recursos {


// 1️⃣ partitures disp per a mes d'un instrument 
public static function partituraPerInstrument(array $lista, array $instrument): array {

    $resultado = [];

    foreach ($lista as $p) {
        if ($p->getInstrumento() === $instrument) {
            $resultado[] = $p;
        }
    } return $resultado;
}



// 2️⃣ retorna partitures de X autor 
public static function partituraPerAutor(array $lista, string $autor): array {

    $resultado = [];

    foreach ($lista as $p) { 
        if ($p->getAutor() == $autor) {
            $resultado[] = $p;
        }
    } return $resultado;
}

}
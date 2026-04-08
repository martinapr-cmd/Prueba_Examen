<?php

class Recursos {


// 1️⃣ partituras disponibles con mas de un instrumento buscado. 

public static function obtenerPartiturasConXInstrumentos(array $lista, array $instrumento): array {

    $resultado = [];

    foreach ($lista as $p) {
        //intersecta arrays con array_intersect()
        if (array_intersect($instrumento, $p->getInstrumento())) {
            $resultado[] = $p;
        }
    } return $resultado;
}



// 2️⃣ retorna partitures de X autor 
public static function obtenerPartituraPerAutor(array $lista, string $autor): array {

    $resultado = [];

    foreach ($lista as $p) { 
        if ($p->getAutor() == $autor) {
            $resultado[] = $p;
        }
    } return $resultado;
}

}
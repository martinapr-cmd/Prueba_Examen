<?php

require_once "Partitura.php";
require_once "Recursos.php";


$p1 = new Partitura("La velata", 1500, "piano", "Von PonPOn");
$p2 = new Partitura("La ressonata", 1659, "piano", "D.Rowlin");
$p3 = new Partitura("Vers 4", 1979, "guitarra", "Jhon Mick");
$p4 = new Partitura("Song 5", 2023, "bateria", "D.Rowlin");

$lista = [$p1, $p2, $p3, $p4];



$partituraDeAutor = Recursos::partituraPerAutor($lista, "D.Rowlin");
echo "Partituras de D.Rowlin: \n";
foreach ($partituraDeAutor as $p) {
    echo "- " . $p->getNombre() . "\n";
}


$partituraPerInstrumento = Recursos::partituraPerInstrument($lista, "piano");
echo "Partituras de piano: \n";
foreach ($partituraPerInstrumento as $p) {
    echo "- " . $p->getNombre();
}

var_dump($partituraDeAutor);




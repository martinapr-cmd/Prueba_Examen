<?php

class Partitura {

private string $nombre; 
private int $año; 
private array $instrumento = [];
private string $autor;

public function __construct(string $nombre, int $año, array $instrumento, string $autor)
{
    $this->nombre = $nombre;
    $this->año = $año; 
    $this->instrumento = $instrumento;
    $this->autor = $autor; 
}

public function getNombre() {return $this->nombre; }
public function getAño() {return $this->año;}
public function getInstrumento() {return $this->instrumento;}
public function getAutor() {return $this->autor;}


}
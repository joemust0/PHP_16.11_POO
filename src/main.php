<?php

include_once __DIR__. "/../vendor/autoload.php";

use App\model\Carro;
use App\model\Usuario;

$u = new Carro("Civic");
$fiat = new Carro("Strada");
$h = new Usuario("Joe");

echo "<h1> Modelo do carro:</h1>";
echo $u-> getModelo();
echo "<br>";
echo $h->getNome();
echo "<br>";
echo $fiat-> getModelo();

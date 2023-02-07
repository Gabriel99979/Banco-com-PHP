<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petropolis', 'Bairro Qualquer', 'Minha Rua','356');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma Rua','50');

// echo $umEndereco->recuperaRua() . ", " . $umEndereco->recuperaBairro() . ", " . ou chamar endereco depois de ter impementado toString

echo $umEndereco . PHP_EOL;
echo $outroEndereco->Rua;

<?php

require_once 'autoload.php';

use \Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;


$conta = new ContaPoupanca(
    new Titular(
        new CPF(
            '123.123.456-12'),
            'Vinicius',
            new Endereco('Petrópolis', 'Bairro Teste', 'Rua 16', '37')
        )
        );
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();

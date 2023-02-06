<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Desenvolvedor, Gerente};


$umFuncionario = new Desenvolvedor( 'Vincius', 
                                   new CPF('123.263.756-10'),
                                  'Desenvolvedor',
                                   1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente( 'Patricia', 
                                   new CPF('723.463.756-10'),
                                  'Gerente',
                                   3000
);

$umDiretor = new Diretor( 'Ana Paula', 
                                   new CPF('923.463.756-10'),
                                  'Diretor',
                                   5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacoes($umFuncionario);
$controlador->adicionaBonificacoes($umaFuncionaria);
$controlador->adicionaBonificacoes($umDiretor);


echo 'Bonificações totais: ' . $controlador->recuperaTotal() . PHP_EOL;
echo 'Salário Desenvolvedor: ' . $umFuncionario->recuperaSalario() . PHP_EOL;
<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF, Funcionario};

$umFuncionario = new Funcionario( 'Vincius', 
                                   new CPF('123.263.756-10'),
                                  'Desenvolvedor',
                                   1000
);

$umaFuncionaria = new Funcionario( 'Patricia', 
                                   new CPF('723.463.756-10'),
                                  'Gerente',
                                   3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacoes($umFuncionario);
$controlador->adicionaBonificacoes($umaFuncionaria);

echo $controlador->recuperaTotal();

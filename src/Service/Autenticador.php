<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Autenticavel;

class Autenticador 
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutentificar($senha)){
            echo "OK. Usuário logado no sistema.";
        } else {
            echo "Ops. Senha incorreta.";
        }
    }
}
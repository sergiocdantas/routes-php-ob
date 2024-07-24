<?php

function limpaNumero(string $numero): string
{
    return preg_replace('/[^0-9]/','', $numero);
}


function cpfValidade(string $cpf): bool
{
    // Verifica se tem 11 digitos e se não são somente digitos repetidos
    if(mb_strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)){
        return false;
    }

    // Realiza os cálculos para verificação do cpf
    for($t = 9; $t < 11; $t++){
        for($d = 0, $c = 0; $c < $t; $c++){
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d){
            return false;
        }
    }

    return true;
}
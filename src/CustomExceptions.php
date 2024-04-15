<?php


class DadosInsuficientesException extends Exception {
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

class IMCForaDosLimitesException extends Exception {
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

        $peso = $usuario->getPeso();
        $altura = $usuario->getAltura();
        $sexo = $usuario->getSexo()->value;

        if ($peso === null || $altura === null ) {
            throw new DadosInsuficientesException("Dados insuficientes para realizar o cálculo IMC");
        }

        if ($peso <= 0 || $altura <= 0){
            throw new DadosInsuficientesException("Peso e altura devem ser maiores que zero para calcular IMC");
        }

        
        if ($imc < 0 || $imc > 40) {
            throw new IMCForaDosLimitesException("O IMC está fora dos limites válidos");
        }

        $imc = calcularIMC($peso, $altura); 

        if ($imc < 0 || $imc > 40) {
            throw new IMCForaDosLimitesException("O IMC está fora dos limites válidos");
        }


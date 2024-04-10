<?php

// O IMC é calculado dividindo o peso (em kg) pela altura ao quadrado (em m), 
// de acordo com a seguinte fórmula: IMC = peso / (altura x altura).

/**
    IMC	Classificação
    Menor que 18,5	Magreza
    18,5 a 24,9	Normal
    25 a 29,9	Sobrepeso
    30 a 34,9	Obesidade grau I
    35 a 39,9	Obesidade grau II
    Maior que 40	Obesidade grau III
 */
class CalculadoraImc
{
    private Usuario $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }


    public function calcular(): float
    {
        return $this->usuario->getPeso() / ($this->usuario->getAltura() * $this->usuario->getAltura());
    }

    public function classificarIdade(int $idade,string $sexo){
        $imc = $this->calcular();
        if ($idade >= 20){
            return $imc;
        
        } else 
        if ($idade < 10){
            return 'Só calcula acima de 10 anos';
        } else {
            if ($sexo == 'Feminino'){
                if ($idade == 10){
                    if ($imc < 14.23) {
                        return 'Baixo Peso';
                       } else if ($imc > 20.19){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                if ($idade == 11){
                    if ($imc < 14.60) {
                        return 'Baixo Peso';
                       } else if ($imc > 21.18){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
                if ($idade == 12){
                    if ($imc < 14.98) {
                        return 'Baixo Peso';
                       } else if ($imc > 22.17){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
                if ($idade == 13){
                    if ($imc < 15.36) {
                        return 'Baixo Peso';
                       } else if ($imc > 23.08){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
                if ($idade == 14){
                    if ($imc < 15.67) {
                        return 'Baixo Peso';
                       } else if ($imc > 23.88){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
                if ($idade == 15){
                    if ($imc < 16.01) {
                        return 'Baixo Peso';
                       } else if ($imc > 24.29){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
                if ($idade == 16){
                    if ($imc < 16.37) {
                        return 'Baixo Peso';
                       } else if ($imc > 24.74){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
                if ($idade == 17){
                    if ($imc < 16.59) {
                        return 'Baixo Peso';
                       } else if ($imc > 25.23){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
                if ($idade == 18){
                    if ($imc < 16.71) {
                        return 'Baixo Peso';
                       } else if ($imc > 25.56){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
                if ($idade == 19){
                    if ($imc < 16.87) {
                        return 'Baixo Peso';
                       } else if ($imc > 25.85){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; }
                }
            } else {
                if ($idade == 10){
                    if ($imc < 14.42) {
                        return 'Baixo Peso';
                       } else if ($imc > 19.60){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 11){
                    if ($imc < 14.83) {
                        return 'Baixo Peso';
                       } else if ($imc > 20.35){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 12){
                    if ($imc < 15.24) {
                        return 'Baixo Peso';
                       } else if ($imc > 21.12){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 13){
                    if ($imc < 15.73) {
                        return 'Baixo Peso';
                       } else if ($imc > 21.93){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 14){
                    if ($imc < 16.18) {
                        return 'Baixo Peso';
                       } else if ($imc > 22.77){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 15){
                    if ($imc < 16.59) {
                        return 'Baixo Peso';
                       } else if ($imc > 23.63){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 16){
                    if ($imc < 17.01) {
                        return 'Baixo Peso';
                       } else if ($imc > 24.45){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 17){
                    if ($imc < 17.31) {
                        return 'Baixo Peso';
                       } else if ($imc > 25.28){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 18){
                    if ($imc < 17.54) {
                        return 'Baixo Peso';
                       } else if ($imc > 25.95){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }
                if ($idade == 19){
                    if ($imc < 17.80) {
                        return 'Baixo Peso';
                       } else if ($imc > 26.36){
                       return 'Sobrepeso';
                       } else { 
                       return 'Adequado ou Eutrófico'; } 
                }          
        }
    }
}

    }
}
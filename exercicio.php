<?php

$num=2;
 switch($num){
        case 1:
            $mensagem= 'Uma bicicleta';
            break;
        case 2:
            $mensagem='20 mil reais em barra de ouro';
            break;
        case 3:
            $mensagem='Uma casa';
            break;
        case 4:
            $mensagem='Um conjunto de panelas';
            break;
        case 5:
            $mensagem='Um carro zero';
            break;
            default: 
            $mensagem='nada, infelizmente';
        
 }
      echo "Parabéns o seu premio foi: {$mensagem}";

?>

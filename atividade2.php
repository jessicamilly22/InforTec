<!DOCTYPE html>
<html>
<header></header>
<body>


<?php
$nota1= 7;
$nota2=5;
$nota3=8;
$nota4=9;
$resultado=($nota1+$nota2+$nota3+$nota4)/4;

if($resultado>=7 && $resultado!=10){
    echo " O aluno foi aprovado";  
}

elseif($resultado==10){
    echo"Parabéns!Aprovado com nota máxima";
}

elseif($resultado==0){
    echo"Estude mais,voce näo acertou nada";
}

else{
    echo "O aluno foi reprovado";
}

echo "Resultado:" .$resultado . "<br>";
?>


</body>
</html>
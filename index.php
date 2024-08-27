<!DOCTYPE html>
<html>
<header></header>
<body>
    <!--Isso e um comentario-->
<?php
    /*comentario*/
    echo "Meu primeiro script em php";
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump("Maria");
      echo "<br>";
?>
<?php
define("INFERIOR",1);
define("SUPERIOR",100);
$numero = rand (INFERIOR,SUPERIOR);
echo "Meu numero é: <br>";
echo $numero."<br>";
?>
<?php
   $valor= 5;
   if($valor == 18){
      echo "O valor e 18";
   }
   elseif ($valor >=10){
     echo "O valor é maior ou igual a 10";
   }
   else {
     echo "O valor é menor que 10";
   }
?>


</body>
</html>
<!DOCTYPE html>
<html>
<header></header>
<body>
     
<?php
    echo "Medicamentos";
?>
<?php
   $idade = 18;
   if($idade >= 16){
    echo $idade."Pode utilizar o medicamento";
 }
 elseif ($idade >=65){
   echo $idade. "Acima de 65 anos o uso tem restricoes";
 }
 else {
   echo $idade. "Abaixo de 10 anos é proibido o uso";
 }
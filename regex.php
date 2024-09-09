<?php
//regex preg_match
$tr = "Visite o Senac";
$pat = "/SENAC/";
echo preg_match($pat,$tr);
echo "<br>";

$tatu="Visite o windows";
$pato="/WINDOWS/i";
echo preg_replace($pato,"WINDOWS", $tatu);
echo "<br>";

//DATA
date_default_timezone_set("America/Sao_Paulo");
echo " Hoje é ". date("y/m/d") . "<br>";
echo "Hoje é " . date("l"). "<br>";
echo " Hoje é ". date("y/m/d") . "<br>";
echo date ("Y"); "<br>";
echo " Hora ". date ("h:i:sa") . "<br>";
$age = array("Peter"=>35, "Ben"=>37, "Paulo"=>43);
echo "<br>";
echo json_encode($age);


?>
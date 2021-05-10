<?php

$qualASuaIdade = 30;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor= 65;



IF ($qualASuaIdade < $idadeCrianca) {

echo "Criança";

} elseif($qualASuaIdade < $idadeMaior) {

echo "Adolecente";

} elseif($qualASuaIdade = $idadeMelhor){

echo "Adulto";

} else {

echo "Idoso";

}

?>

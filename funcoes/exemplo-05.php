<?php

// $a = variável
$a = 10;

// $b = parametros de funções
function trocaValor($b){

    $b += 50;

    return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;

?>
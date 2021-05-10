<?php

//comentario de linha use "//" no inicio da linha
//comentario de bloco use "/*" para abrir e "/*" para fechar

$anoNascimento = 1990;

$nome1 = "Joao";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome; 
//concatenação

echo $nomeCompleto;

exit; 
//exit faz o php para aqui neste ponto

//limpar uma varialvel

unset($nome1);

if(isset($nome1)) {

   echo $nome1;

}

?>

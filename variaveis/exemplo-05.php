<?php

$nome = " Glaucio ";

function teste() {
  
   global $nome;
   echo $nome;

}

function teste2(){

   global $nome; 
   //$nome = "joao";
   echo$nome." agora no teste2 " ;
}

teste();
teste2();


?>

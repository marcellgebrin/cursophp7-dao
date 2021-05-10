<?php

require_once("config.php");

use Cliente\cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@code.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();


?>
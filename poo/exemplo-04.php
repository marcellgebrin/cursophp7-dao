<?php

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construction($a, $b, $c){

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;

	}

    public function __destruct(){

    	var_dump("DESTRUIR");

    }

    public function __toString(){

    	return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }

}

$newendereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

echo $newendereco;

?>
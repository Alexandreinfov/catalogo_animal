<?php 

	class Animal{
		public $peso;
		public $comprimento;
		public $altura;
		public $cor;
		public $nome;


	public function __construct($peso, $comprimento, $altura, $cor, $nome){

		$this->peso = $peso;
		$this->comprimento = $comprimento;
		$this->altura = $altura;
		$this->cor = $cor;
		$this->nome = $nome;
	}
	public function exibir_animal(){
			echo "<tr>
 				<td>$this->peso</td>
 				<td>$this->comprimento</td>
 				<td>$this->altura</td>
 				<td>$this->cor</td>
 				<td>$this->nome</td>
 	
 	    	";
		}
	
	}
 ?>
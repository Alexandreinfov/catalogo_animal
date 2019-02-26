<?php 
	include_once("animal.php");

	class Mamifero extends Animal{
		public $velocidade_max;

		public function __construct($peso, $comprimento, $altura, $cor, $nome, $velocidade_max)
		{

			parent::__construct($peso, $comprimento, $altura, $cor, $nome);

			$this->velocidade_max = $velocidade_max;

		}
		public function exibir_reptil(){

			$this->exibir_animal();
			echo "

 				<td>$this->velocidade_max</td>
 	    	</tr>";
		}
	}


 ?>
<?php 
	include_once("animal.php");

	class Reptil extends Animal{
		public $submerso;

		public function __construct($peso, $comprimento, $altura, $cor, $nome, $submerso)
		{

			parent::__construct($peso, $comprimento, $altura, $cor, $nome);

			$this->submerso = $submerso;

		}
		public function exibir_reptil(){

			$this->exibir_animal();
			echo "

 				<td>$this->submerso</td>
 	    	</tr>";
		}
	}


 ?>
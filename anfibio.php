<?php 
	include_once("animal.php");

	class Anfibio extends Animal{
		public $submerso;

		public function __construct($peso, $comprimento, $altura, $cor, $tipo , $nome, $submerso)
		{

			parent::__construct($peso, $comprimento, $altura, $cor, $tipo , $nome);

			$this->submerso = $submerso;

		}
		public function exibir_anfibio(){

			$this->exibir_animal();
			echo "

 				<td>$this->submerso</td>
 	    	</tr>";
		}
	}


 ?>
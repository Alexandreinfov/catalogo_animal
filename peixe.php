<?php 
	include_once("animal.php");

	class Peixe extends Animal{
		public $temperatura;

		public function __construct($peso, $comprimento, $altura, $cor, $tipo , $nome,$temperatura )
		{

			parent::__construct($peso, $comprimento, $altura, $cor, $tipo , $nome);

			$this->temperatura = $temperatura;

		}

		public function exibir_peixe(){

			$this->exibir_animal();
			echo "

 				<td>$this->temperatura</td>
 	    	</tr>";
		}
	}


 ?>
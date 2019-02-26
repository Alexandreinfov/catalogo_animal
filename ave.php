<?php 
	include_once("animal.php");

	class Ave extends Animal{
		public $altura_voo;

		public function __construct($peso, $comprimento, $altura, $cor, $nome, $altura_voo)
		{

			parent::__construct($peso, $comprimento, $altura, $cor, $nome);

			$this->altura_voo = $altura_voo;

		}
		public function exibir_ave(){

			$this->exibir_animal();
			echo "

 				<td>$this->altura_voo</td>
 	    	</tr>";
		}
	}


 ?>
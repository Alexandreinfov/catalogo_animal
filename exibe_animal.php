<?php  
	include("ave.php");
	include("anfibio.php");
	include("peixe.php");
	include("reptil.php");
	include("mamifero.php");
	$animal = $_POST['tipo'];
	
echo '
	<table border="1">
 	<tr>
 		<td>Peso</td>
 		<td>comprimento</td>
 		<td>altura</td>
 		<td>cor</td>
 		<td>Tipo</td>
 		<td>nome</td>
 	';

	switch ($animal) {

		case 'ave':
		
		echo "<td>Altura voo</td></tr>";

		$ave = new Ave($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['nome'],$_POST['altura_voo']);

		
		$ave->exibir_ave();
		echo "</table>";

		break;

		case 'anfibio':
		
		echo "<td>submerso</td></tr>";

		$anfibio = new Anfibio($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['nome'],$_POST['submerso']);

		$anfibio->exibir_anfibio();
		echo "</table>";
		break;

		case 'peixe':
		
		echo "<td>temperatura</td></tr>";
		$peixe = new Peixe($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['nome'],$_POST['temperatura']);

		$peixe->exibir_peixe();
		echo "</table>";
		break;

		case 'reptil':

		echo "<td>velocidade_max</td></tr>";
		

		$reptil = new Reptil($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['nome'],$_POST['submerso']);

		$reptil->exibir_reptil();
		echo "</table>";
		break;

		case 'mamifero':

		
		echo "<td>velocidade_max</td></tr>";
		$mamifero = new Mamifero($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['nome'],$_POST['velocidade_max']);

		$mamifero->exibir_mamifero();
		echo "</table>";
		break;
		
	}
 ?>        
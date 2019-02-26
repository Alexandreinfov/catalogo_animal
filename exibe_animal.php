<?php  
	
	$animal = $_POST['tipo'];
	
echo '
	<table border="1">
 	<tr>
 		<td>Peso</td>
 		<td>comprimento</td>
 		<td>altura</td>
 		<td>cor</td>
 		<td>nome</td>
 	';

	switch ($animal) {

		case 'ave':
		include("ave.php");
		echo "<td>Altura voo</td></tr>";

		$ave = new Ave($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['altura_voo']);

		
		$ave->exibir_ave();
		echo "</table>";

		break;
		case 'anfibio':
		include("anfibio.php");

		$anfibio = new Ave($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['submerso']);

		break;
		case 'peixe':
		include("peixe.php");

		$peixe = new Ave($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['temperatura']);

		break;
		case 'reptil':
		include("reptil.php");

		$reptil = new Ave($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['submerso']);

		break;
		case 'mamifero':
		include("mamifero.php");
		$mamifero = new Ave($_POST['peso'],$_POST['comprimento'],$_POST['altura'],$_POST['cor'],$_POST['tipo'],$_POST['velocidade_max']);

		break;
		
	}
 ?>        
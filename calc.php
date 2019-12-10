<?php

if ($_POST)
{

	$gasolina = $_POST['gasolina'];
	$consumoGasolina = $_POST['consumoGasolina'];
	$alcool = $_POST['alcool'];
	$consumoAlcool = $_POST['consumoAlcool'];
	$kilometro = $_POST['kilometro'];

	if (is_numeric($gasolina) && is_numeric($consumoGasolina) && is_numeric($alcool) 
		&& is_numeric($consumoAlcool) && is_numeric($kilometro))
	{

		if ($gasolina > 0 && $consumoGasolina > 0 && $alcool > 0 
			&& $consumoAlcool > 0 && $kilometro > 0)
		{
			$mensagem = "";

			$resultadoGasolina = ($kilometro / $consumoGasolina) * $gasolina;

			$resultadoAlcool = ($kilometro / $consumoAlcool) * $alcool;

			$resultadoGasolina = number_format($resultadoGasolina, 2, ',', '.');

			$resultadoAlcool = number_format($resultadoAlcool, 2, ',', '.');

			$mensagem .="<div class='sucesso'";
			$mensagem .="<p>O valor a ser gasto é:";
			$mensagem .="<ul>";
			$mensagem .="<li>Gasolina <b>R$ ".$resultadoGasolina."</b></li>";
			$mensagem .="<li>Alcool <b>R$ ".$resultadoAlcool."</b></li>";
			$mensagem .="</ul>";
			$mensagem .="</div>";
		}
		else
		{
			$mensagem .="<div class='erro'>";
			$mensagem .="<b>ATENÇÂO!</b><p>Os valores informados devem ser maiores que zero.</p>";
			$mensagem .="</div>";

		}
	}
	else
	{
		$mensagem .="<div class='erro'>";
		$mensagem .="<b>ATENÇÂO!</b><p>Todos os campos devem ser preenchidos com números.</p>";
		$mensagem .="</div>";
	}
}
else
{
	$mensagem .="<div class='erro'";
	$mensagem .="<b>ATENÇÂO!</b><p>Formulário preenchido de forma incorreta.</p>";
	$mensagem .="</div>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Resultado</title>
	<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
	<div class="painel">
		<h2>Resultado do calculo</h2>

		<div class="conteudo-painel">
			<?php 
				echo $mensagem 
			?>

			<a class="btn" href="data.php">Voltar</a>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Km percorrido</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Preencha os campos</h2>
			<div class="conteudo-painel"></div>
				

				<form action="calc.php" method="POST">
					<label for="gasolina">Digite o valor da gasolina</label>
					<input type="number" name="gasolina" />

					<label for="consumoGasolina">Informe o consumo por 1/L para gasolina</label>
					<input type="number" name="consumoGasolina" />

					<label for="alcool">Digite o valor da alcool</label>
					<input type="number" name="alcool" />

					<label for="consumoAlcool">Informe o consumo por 1/L para alcool</label>
					<input type="number" name="consumoAlcool" />

					<label for="kilometro">Digite a kilometragem percorrida</label>
					<input type="number" name="kilometro" />
					
					<div class="btns">
						<a class="btn" href="#"><button type="submit"></button>Calcular</a>
						<a class="btn" href="index.php">Voltar</a>	
					</div>
				</form>
		</div>
	</main>
</body>
</html>


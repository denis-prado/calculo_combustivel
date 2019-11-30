<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Km percorrido</title>
</head>
<body>
	<main>
		<div class="panel">
			<div class="conteudo-painel"></div>
				<p>Para prosseguir com o cálculo, informe os dados de acordo com o preço atual dos combutíveis e consumo do seu veículo de acordo com o combústivel específico.</p>

				<form action="calc.php" method="POST">
					<label for="gasolina">Digite o valor da gasolina</label>
					<input type="number" name="gasolina" />

					<label for="consumo">Informe o consumo por 1/L para gasolina</label>
					<input type="number" name="consumoGasolina" />

					<label for="alcool">Digite o valor da alcool</label>
					<input type="number" name="alcool" />

					<label for="consumo">Informe o consumo por 1/L para alcool</label>
					<input type="number" name="consumoAlcool" />

					<label for="kilometro">Digite a kilometragem percorrida</label>
					<input type="number" name="kilometro" />

					<button type="submit">Calcular</button>
				</form>
		</div>
	</main>
</body>
</html>


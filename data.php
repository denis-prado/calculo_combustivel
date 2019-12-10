<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Km percorrido</title>
	<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Preencha os campos</h2>
			<div class="conteudo-painel">
				
				<form action="calc.php" method="POST">
					<label for="gasolina">Digite o valor da gasolina</label>
					<input type="number" step="any" name="gasolina" required />

					<label for="consumoGasolina">Informe o consumo por 1/L para gasolina</label>
					<input type="number" step="any" name="consumoGasolina" required />

					<label for="alcool">Digite o valor da alcool</label>
					<input type="number" step="any" name="alcool" required />

					<label for="consumoAlcool">Informe o consumo por 1/L para alcool</label>
					<input type="number" step="any" name="consumoAlcool" required />

					<label for="kilometro">Digite a kilometragem percorrida</label>
					<input type="number" name="kilometro" required />
					
					<div class="esquerda-direita">
						<button class="btn" type="submit">Calcular</button>
					</div>
					<div class="esquerda-direita">
						<a class="btn"href="index.php">Voltar</a>
					</div>
				</div>
			</form>
		</div>
	</main>
</body>
</html>


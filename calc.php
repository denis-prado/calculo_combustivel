<?php

$gasolina = $_POST['gasolina'];
$consumoGasolina = $_POST['consumoGasolina'];
$alcool = $_POST['alcool'];
$consumoAlcool = $_POST['consumoAlcool'];
$kilometro = $_POST['kilometro'];

$resultadoGasolina = ($kilometro / $consumoGasolina) * $gasolina;

$resultadoAlcool = ($kilometro / $consumoAlcool) * $alcool;

echo "$resultadoGasolina - $resultadoAlcool";
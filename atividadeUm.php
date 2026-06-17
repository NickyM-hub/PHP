<?php
$nome = "Nicole\n";
echo $nome;

$nota1 = 8.0;
$nota2 = 9.0;
$nota3 = 7.0;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média das notas é $media \n";

$metros = 5;
$centimetros = $metros * 100;
echo "$metros metros equivalem a $centimetros centímetros.\n";

$ano = 2024;
if ($ano % 4 == 0 || $ano % 4 == 0) {
    echo "O ano é bissexto\n";
}
else {
    echo "O ano não é bissexto\n";
}


$temperaturaEmCelsius = 24.2;
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 + 32;

$mensagem = "A temperatura de $temperaturaEmCelsius Celsius é equivalente a $temperaturaEmFahrenheit Fahrenheit\n";

echo $mensagem;
<?php
echo "Hello world!\n";

// Variáveis para armazenar informações do filme
$nomeFilme = "Top Gun\n";
$anoLancamento = $argv[1] ?? 2022; // Recebe o ano de lançamento como argumento da linha de comando
$notaFilme = 8.8;
$incluidoPlano = true;

// Exibindo as informações do filme
echo "Nome do Filme: " . $nomeFilme . "\n";
echo "Ano de lançamento: $anoLancamento\n";
echo "Nota do Filme: " . $notaFilme . "\n";
echo "Incluído no Plano: " . ($incluidoPlano ? "Sim" : "Não") . "\n"; 
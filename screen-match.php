<?php 

echo "Bem-vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$notaFilme = (9 + 6 + 8 + 7.5 + 5) / 5;
$inclusoNoPlano = true;

echo "$notaFilme\n$anoLancamento\n";

$nomeFilme = "A";
$nomeFilme = "B";
$nomeFilme = "C";

$genero = match($nomeFilme) {
    "A" => "Ação",
    "B" => "Ficção científica",
    "C" => "Comédia"
};

echo $genero;

echo "\n$argc\n";

foreach($argv as $value) {
    echo "$value\n";
}

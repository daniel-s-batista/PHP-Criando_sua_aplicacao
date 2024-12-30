<?php 

$saldo = 0;

do {
    echo "1 - Consultar saldo\n";
    echo "2 - Sacar valor\n";
    echo "3 - Depositar valor\n";
    echo "0 - Sair\n";
    $input = fgets(STDIN);
    switch ($input) {
        case 1:
            echo "# # # # # # # # # # # # # # # # # # # #\n";
            echo "Saldo atual = R$ " . number_format($saldo, 2);
            echo "\n# # # # # # # # # # # # # # # # # # # #\n\n";
            break;
        case 2:
            echo "Valor desejado: ";
            $valor = floatval(fgets(STDIN));
            if ($valor < $saldo && $valor > 0) {
                $saldo -= $valor;
                echo "Saque concluído\n\n";
            }
            else echo "Saldo insuficiente\n\n";
            break;
        case 3:
            echo "Valor a ser depositado: ";
            $valor = floatval(fgets(STDIN));
            if ($valor > 0) {
                $saldo += $valor;
                echo "Depósito concluído\n\n";
            }
            else echo "Valor inválido\n\n";
            break;
        case 0:
            echo "Abueno adiós, master (PS2 noises)\n\n";
            break;
        default:
            echo "Opção inválida\n\n";
            break;
    }
} while ($input != 0);
<?php
    $salario = 800;
    $gasolina = 2.55;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O salário é um número? " . is_numeric($salario) . '<br>';
            echo "A gasolina é um número? " . is_numeric($gasolina) . '<br><br>';


            // testar se é inteiro
            echo "O salário é um inteiro? " . is_int($salario) . '<br>';
            echo "A gasolina é um inteiro? " . is_int($gasolina) . '<br><br>';


            // testar se é float
            echo "O salário é um float? " . is_float($salario) . '<br>';
            echo "A gasolina é um float? " . is_float($gasolina) . '<br><br>';

            echo "Arredondar para o inteiro proximo " . $gasolina . ' -> ' . round($gasolina,0) . '<br><br>';
            echo "Arredondar para o decimal proximo " . $gasolina . ' -> ' . round($gasolina,1) . '<br><br>';
            echo "Arredondar para baixo " . $gasolina . ' -> ' . floor($gasolina) . '<br><br>';
            echo "Arredondar para cima " . $gasolina . ' -> ' . ceil($gasolina) . '<br><br>';
        ?>
        
        
    </body>
</html>
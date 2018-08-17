<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            
            $salada = array("Maça", "Abacate", "Laranja");

            //retorna um se encontra
            echo "Existe o elemento? " . in_array("Abacate", $salada) . "<br>";
            
            //retorna a posição no array
            echo "Existe o elemento? " . array_search("Laranja", $salada) . "<br>";
            

        ?>


        <pre>
            <?php

                //print_r($lost);

            ?>


        </pre>
    </body>
</html>
<?php

    $numero = $_GET [ 'numero' ].rand(1, 10); 

    if ($numero % 2 == 0)
    {
        echo("O numero é $numero.");
        echo("\nO numero é PAR!");
    }
    else
    {
        echo("O numero é $numero.");
        echo("\nO numero pe IMPAR");
    }

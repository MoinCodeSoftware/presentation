<?php

declare(strict_types=1);

function addiere(int|float $a, int|float $b) : int|float
{
    $erg = $a + $b;
    return $erg;
}


echo addiere(12.5, 2.7);




?>
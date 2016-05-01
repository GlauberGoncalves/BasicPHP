<?php

// troca valor da variavel "A" com a "B"

$a = 20;
$b = 10;

    echo "<br>A = $a<br>";
    echo "<br>B = $b<br>";

    echo "<br>Trocando valores sem var aux<br><br>";

    //processamento
    
    $b = $b + $a; // B = 10+20 = 30
    $a = $b - $a; // A = 30 - 10 = 20
    $b = $b - $a; // B = 30 - 20 = 10
    
    echo "<br>A = $a<br>";
    echo "<br>B = $b<br>";
?>
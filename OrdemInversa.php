<?php

//1.  Imprimir sequencia de numeros na ordem inversa

$i;
$numeros[11];

// Ordem normal
echo "<table border='1px'>";
echo "<tr>Ordem crescente do vetor</tr>";
echo "<tr>";
    for($i=1;$i<=10;$i++)
        {
            echo "<td>$i</td>";
        }
echo "</tr>";
// decrescente
echo "<table border='1px'>";
echo "<tr>Ordem decrescente do vetor</tr>";
echo "<tr>";
    for($i=10;$i>=1;$i--)
        {
            echo "<td>$i</td>";
        }
echo "</tr>";

?>
<?php
$ano = $_REQUEST["ano"];
$f = fopen("arquivo.csv", "r");
$x = fgetcsv($f);
$i = 0;
while ($ano !== $x[$i]) {
    $i++;
    if ($i >= 7) {
        echo "Ano não encontrado!";
        break;
    }
}
if ($i < 7) {
    echo "<table>";
    echo "<tr>";
    echo "<th>{$x[0]}</th>";
    echo "<th>{$x[$i]}</th>";
    echo "</tr>";
    while ($x) {
    $x = fgetcsv($f);
    echo "<tr>";
    echo "<td>{$x[0]}</td>";
    echo "<td>{$x[$i]}</td>";
    echo "</tr>";
    }
    echo "</table>";}

?>
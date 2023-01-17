
<!-- 1: Lecture d'un fichier _______________Ne fonctionne pas_________________-->

<?php

$file = file("https://ncode.amorce.org/ressources/Pool/MS_FULL_STACK/PHP/src/liens.txt");

echo "<html><head><title>Liste de liens</title></head><body>";
echo "<ul>";
foreach ($file as $line) {
    $line = trim($line);
    echo "<li><a href='$line'>$line</a></li>";
}
echo "</ul>";
echo "</body></html>";
?>
















<!-- 2: Récupération d'un fichier distant -->

<!-- <?php

$file = file("http://bienvu.net/misc/customers.csv");
$data = array();

foreach ($file as $line) {
    $data[] = explode(",", $line);
}

$headers = array();

echo "<table class='table'>";
echo "<thead><tr>";
foreach ($headers as $header) {
    echo "<th>$header</th>";
}
echo "</tr></thead>";

echo "<tbody>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?> -->

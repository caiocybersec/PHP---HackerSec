<?php
// Exemplo de loop while
echo "Exemplo de loop while:<br>";
$i = 0;
while ($i < 10) {
    echo $i . " ";
    $i++;
}
echo "<br><br>";

// Exemplo de loop do-while
echo "Exemplo de loop do-while:<br>";
$i = 0;
do {
    echo $i . " ";
    $i++;
} while ($i < 10);
echo "<br><br>";

// Exemplo de loop for
echo "Exemplo de loop for:<br>";
for ($i = 0; $i < 10; $i++) {
    echo $i . " ";
}
echo "<br><br>";

// Exemplo de loop foreach com array indexado
echo "Exemplo de loop foreach com array indexado:<br>";
$array = array(1, 2, 3, 4, 5);
foreach ($array as $value) {
    echo $value . " ";
}
echo "<br><br>";

// Exemplo de loop foreach com array associativo
echo "Exemplo de loop foreach com array associativo:<br>";
$associativeArray = array("key1" => "value1", "key2" => "value2");
foreach ($associativeArray as $key => $value) {
    echo $key . " => " . $value . " ";
}
echo "<br><br>";

// Exemplo avançado com break
echo "Exemplo de loop for com break:<br>";
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . " ";
}
echo "<br><br>";

// Exemplo avançado com continue
echo "Exemplo de loop for com continue:<br>";
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . " ";
}
echo "<br>";
?>

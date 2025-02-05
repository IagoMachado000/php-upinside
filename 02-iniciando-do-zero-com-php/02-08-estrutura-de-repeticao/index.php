<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.08 - Estruturas de repetição");

/**
 * 
 */
fullStackPHPClassSession("while, do-while", __LINE__);

$looping = 1;
$while = [];

while ($looping <= 5) {
    $while[] = $looping;
    $looping++;
}

echo "<pre>";
var_dump($while);
echo "</pre>";

$looping = 5;
$while = [];

do {
    $while[] = $looping;
    $looping--;
} while ($looping >= 1);

echo "<pre>";
var_dump($while);
echo "</pre>";

fullStackPHPClassSession("for", __LINE__);

for ($i = 1; $i <= 3; $i++) {
    echo "<p>{$i}</p>";
}

fullStackPHPClassSession("break, continue", __LINE__);

for ($c = 1; $c <= 5; $c++) {
    if ($c % 2 == 0) {
        continue;
    }

    if ($c > 7) {
        break;
    }

    echo "<p>Pulou + 2 :: {$c}</p>";
}

fullStackPHPClassSession("foreach", __LINE__);

$array = [];

for ($i = 0; $i <= 3; $i++) {
    $array[] = $i;
}

echo "<pre>";
var_dump($array);
echo "</pre>";

foreach ($array as $value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

foreach ($array as $key => $value) {
    echo "<pre>";
    var_dump($key . ' = ' . $value);
    echo "</pre>";
}

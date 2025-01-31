<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/**
 * 
 */
fullStackPHPClassSession("closures", __LINE__);

/**
 * Funções anônimas
 */

$myAge = function ($year) {
    $age = date('Y') - $year;
    return "<p>Você tem {$age} anos</p>";
};

echo $myAge(28);

$priceBrl = function ($price) {
    return number_format($price, 2, ',', '.');
};

echo "<p>O projeto custa R$ {$priceBrl(3600)}. Vamos fechar?</p>";

$myCart = [];
$myCart['totalPrice'] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart['totalPrice'] += $myCart[$item];
};

$cartAdd('HTML5', 1, 497);
$cartAdd('JQuery', 2, 497);

echo '<pre>';
var_dump($myCart, $cartAdd);
echo '</pre>';

fullStackPHPClassSession("generator", __LINE__);

$iterator = 4000000;

function showDates($days) {
    $saveDate = [];
    for ($day = 1; $day <= $days; $day++) { 
        $saveDate[] = date('d/m/Y', strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align-center'>";
foreach (showDates(0) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";

function generateDates($days) {
    for ($day = 1; $day <= $days; $day++) { 
        yield date('d/m/Y', strtotime("+{$day}days"));
    }
}

echo "<div style='text-align-center'>";
foreach (generateDates(0) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";
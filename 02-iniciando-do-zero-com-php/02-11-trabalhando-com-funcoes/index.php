<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funcções");

/**
 * 
 */
fullStackPHPClassSession("functions", __LINE__);

require_once __DIR__ . "/functions.php";

echo '<pre>';
var_dump(functionName('Beltrano', 'Ciclano', 'Fulano'));
echo '</pre>';

echo '<pre>';
var_dump(functionName('Um', 'Dois', 'Três'));
echo '</pre>';

echo '<pre>';
var_dump(optionArgs('Beltrano'));
echo '</pre>';

echo '<pre>';
var_dump(optionArgs('Beltrano', 'Ciclano'));
echo '</pre>';

echo '<pre>';
var_dump(optionArgs('Beltrano', 'Ciclano', 'Fulano'));
echo '</pre>';

fullStackPHPClassSession("global access", __LINE__);

$weight = 77;
$height = 1.75;

echo calcImc();

fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(100);

echo $pay;

fullStackPHPClassSession("dynamic arguments", __LINE__);

echo '<pre>';
var_dump(myTeam('Beltrano', 'Ciclano', 'Fulano'));
echo '</pre>';

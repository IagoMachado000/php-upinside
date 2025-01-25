<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * 
 */
fullStackPHPClassSession("Debug Section", __LINE__);

fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "John";
$userLastName = "Doe";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$userAge = 32;

echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge}</span></p>";

/**
 * Variável variável
 * quando usamos o $$ a variável tem o seu nome definido como o valor da variável 
 */
$company = "UpInside";
$$company = "Treinamento";

echo "<h3>{$company} {$UpInside}</h3>";

/**
 * Referência em variáveis
 * Quando usamos o & estamos fazendo referência em variáveis, ou seja, se alteramos qualquer uma delas, todas terão seus valores alterados
 */
$calcA = 10;
$calB = 20;
$calB = &$calcA;
$calB = 20;

var_dump([
    "a" => $calcA,
    "b" => $calB
]);

fullStackPHPClassSession("tipos boolean", __LINE__);

$true = true;
$false = false;

echo "<pre>";
var_dump($true, $false);
echo "</pre>";

/**
 * Teste boolean diretamente na variável
 */
$bestAge = ($userAge > 50);

echo "<pre>";
var_dump($bestAge);
echo "</pre>";

// Valores falsy
$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

echo "<pre>";
var_dump($a, $b, $c, $d, $e);
echo "</pre>";

if ($a || $b || $c || $d || $e) {
    echo "<pre>";
    var_dump(true);
    echo "</pre>";
} else {
    echo "<pre>";
    var_dump($false);
    echo "</pre>";
}

fullStackPHPClassSession("tipos callback", __LINE__);

/**
 * Variáveis que retornam uma rotina ou valor. Tem um retorno que é executado
 */

$code = "<article><h1>Um Call User Function!</h1></article>";
$codeClear = call_user_func("strip_tags", $code);

echo "<pre>";
var_dump($code, $codeClear);
echo "</pre>";

$codeMore = function ($code)
{
    echo "<pre>";
    var_dump($code);
    echo "</pre>";
};

$codeMore("#BoraProgramar!");

fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá mundo!";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 1234;
$float = 1.234;

echo "<pre>";
var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);
echo "</pre>";
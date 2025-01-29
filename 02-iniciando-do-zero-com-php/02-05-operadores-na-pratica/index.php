<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * 
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operatorA = 5;
$operators = [
    'a' => $operatorA,
    'a += 5' => ($operatorA += 5),
    'a -= 5' => ($operatorA -= 5),
    'a *= 5' => ($operatorA *= 5),
    'a /= 5' => ($operatorA /= 5),
];

echo '<pre>';
var_dump($operators);
echo '</pre>';

/**
 * $var++ o incremento é feito posteriormente
 * ++$var o incremento é feito antes
 */
$incrementA = 5;
$incrementB = 5;
$increment = [
    'pós-incremento' => $incrementA++,
    'res-incremento' => $incrementA,
    'pré-incremento' => ++$incrementA,
    'pós-decremento' => $incrementB--,
    'res-decremento' => $incrementB,
    'pré-decremento' => --$incrementB,
];

echo '<pre>';
var_dump($increment);
echo '</pre>';

fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = '5';
$relatedC = 10;
$related = [
    'a == b' => ($relatedA == $relatedB),
    'a === b' => ($relatedA === $relatedB),
    'a != b' => ($relatedA != $relatedB),
    'a !== b' => ($relatedA !== $relatedB),
    'a > c' => ($relatedA > $relatedC),
    'a < c' => ($relatedA < $relatedC),
    'a >= b' => ($relatedA >= $relatedB),
    'a >= c' => ($relatedA >= $relatedC),
    'a <= c' => ($relatedA <= $relatedC),
];

echo '<pre>';
var_dump($related);
echo '</pre>';

fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;
$logic = [
    'a && b' => ($logicA && $logicB),
    'a || b' => ($logicA || $logicB),
    'a' => ($logicA),
    '!a' => (!$logicA),
    '!b' => (!$logicB),
];

echo '<pre>';
var_dump($logic);
echo '</pre>';

fullStackPHPClassSession("aritméticos", __LINE__);

$calcA = 5;
$calcB = 10;
$calc = [
    'a + b' => ($calcA + $calcB),
    'a - b' => ($calcA - $calcB),
    'a * b' => ($calcA * $calcB),
    'a / b' => ($calcA / $calcB),
    'a % b' => ($calcA % $calcB),
];

echo '<pre>';
var_dump($calc);
echo '</pre>';

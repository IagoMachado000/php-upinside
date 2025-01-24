<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * 
 */
fullStackPHPClassSession("Debug Section", __LINE__);

fullStackPHPClassSession("echo", __LINE__);

echo "<p>Olá Mundo!", " ", "<span class='tag'>#BoraProgramar!</span>", "</p>";

$hello = "<p>Olá Mundo!</p>"; 
$code = "<span class='tag'>#BoraProgramar!</span>";

// Variáveis não são interpretadas entre aspas simples
echo "<p>$hello</>";
echo '<p>$hello</>';

// Protegendo variáveis com chaves {}
$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Falta 1 {$day}s para o evento!</p>";

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

// Concatenação
echo '<h3>' . $hello . ' ' . $code . '</h3>';

?>

<!-- Comando de saída fora do escopo php com abreviação do echo -->
<h4><?= $hello; ?> <?= $code; ?></h4>

<?php

fullStackPHPClassSession("print", __LINE__);

/**
 * Não é permitido mais de uma variável por linha separadas por vírgula
 */
//print $hello, $code;

print $hello;
print $code;

print "<h3>{$hello} {$code}</h3>";

fullStackPHPClassSession("print_r", __LINE__);

/**
 * Comando de saída pra visualização de arrays
 */
$array = [
    'company' => 'UpInside',
    'course' => 'FSPHP',
    'class' => 'Comandos de saída',
];

print_r($array);

/**
 * Imprime o valor e retorna 1
 */
echo "<pre>", print_r($array), "</pre>";

/**
 * Com o segundo parâmetro igual a true, apenas imprime o valor
 */
echo "<pre>", print_r($array, true), "</pre>";

fullStackPHPClassSession("print_f", __LINE__);

/**
 * Imprime uma string formatada com valores substituídos
 */
$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "It is a long established fact that a reader will be distracted by 
    the readable content of a page when looking at its layout. The point of 
    using Lorem Ipsum is that it has a more-or-less normal distribution of 
    letters, as opposed to using 'Content here, content here', making it look 
    like readable English.";
printf($article, $title, $subtitle);

fullStackPHPClassSession("vprintf", __LINE__);

/**
 * É usado para exibir uma string formatada, substituindo os placeholders 
 * (%s, %d, etc.) pelos valores fornecidos em um array
 */
$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array);

/**
 * Retorna a quantidade de caracteres
 */
echo vprintf($company, $array);

/**
 * Retorna a string sem a quantidade de caracteres
 */
echo vsprintf($company, $array);

fullStackPHPClassSession("var_dump", __LINE__);

/**
 * Exibe informações detalhadas sobre variáveis
 */
var_dump($array);

/**
 * Podemos passar mais de um parâmetro
 */
echo "<pre>";
var_dump(
    $array,
    $hello,
    $code
);
echo "</pre>";
?>
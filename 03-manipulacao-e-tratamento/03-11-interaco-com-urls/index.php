<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");

/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);

echo "<h1><a href='index.php'>Clear</a></h1>";
echo "<p><a href='index.php?arg1=true&arg2=true'>Argumentos</a></p>";

// transformando dados para argumentos de uma url
$data = [
    'name' => 'Fulano',
    'company' => 'Aquela Empresa',
    'mail' => 'fulano@aquelaempresa.com'
];

$argumentos = http_build_query($data);
echo "<p><a href='index.php?{$argumentos}'>Argumentos array</a></p>";

echo '<pre>';
var_dump($_GET);
echo '</pre>';

$object = (object)$data;

echo '<pre>';
var_dump([
    $object,
    http_build_query($object)
]);
echo '</pre>';


/*
 * [ segurança ] get | strip | filters | validation
 * [ filter list ] https://php.net/manual/en/filter.filters.php
 */
fullStackPHPClassSession("segurança", __LINE__);

$dataFilter = http_build_query([
    'name' => 'Fulano',
    'company' => 'Aquela Empresa',
    'mail' => 'fulano@aquelaempresa.com',
    'site' => 'aquelaempresa.com',
    'script' => '<script>alert("Esse é um JavaScript")</script>'
]);

echo "<p><a href='index.php?{$dataFilter}'>Data filter</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRIPPED);

//Pós filtro
if ($dataUrl) {
    
    if (in_array("", $dataUrl)) {

        // Validando o envio de todos os dados
        echo "<p class='trigger warning'>Faltam dados</p>";

    } elseif (empty($dataUrl["mail"])) {

        // O email precisa ser enviado
        echo "<p class='trigger warning'>Falta o email</p>";

    } elseif (!filter_var($dataUrl["mail"], FILTER_VALIDATE_EMAIL)) {

        // Validando o formato do email
        echo "<p class='trigger warning'>E-mail inválido</p>";

    } else {

        // O email precisa ser enviado
        echo "<p class='trigger accept'>Tudo certo</p>";

    }

} else {

    var_dump(false);

}

echo '<pre>';
var_dump($dataUrl);
echo '</pre>';

// Pré filtro
$dataFilter = http_build_query([
    'name' => 'Fulano',
    'company' => 'Aquela Empresa',
    'mail' => 'fulano@aquelaempresa.com',
    'site' => 'https://aquelaempresa.com',
    'script' => '<script>alert("Esse é um JavaScript")</script>'
]);

parse_str($dataFilter, $arrDataFilter);

echo '<pre>';
var_dump($arrDataFilter);
echo '</pre>';

$dataPreFilter = [
    'name' => FILTER_SANITIZE_STRING,
    'company' => FILTER_SANITIZE_STRING,
    'mail' => FILTER_VALIDATE_EMAIL,
    'site' => FILTER_VALIDATE_URL,
    'script' => FILTER_SANITIZE_STRING
];

echo '<pre>';
var_dump(filter_var_array($arrDataFilter, $dataPreFilter));
echo '</pre>';
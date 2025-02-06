<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

$form = new stdClass();
$form->name = 'Um Nome';
$form->mail = 'um@email.com';

echo '<pre>';
var_dump($_REQUEST);
echo '</pre>';

$form->method = 'get';
$form->method = 'post';
include __DIR__ . '/form.php';

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$post = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

echo '<pre>';
var_dump([
    $post,
    $postArray,
]);
echo '</pre>';

$form->method = 'post';
include __DIR__ . '/form.php';

if ($postArray) {
    if (in_array('', $postArray)) {
        echo "<p class='trigger warning'>Preencha todos os campos</p>";
    } elseif (!filter_var($postArray['mail'], FILTER_VALIDATE_EMAIL)) {
        echo "<p class='trigger warning'>E-mail informado não é válido</p>";
    } else {
        $saveStrip = array_map('strip_tags', $postArray);
        $save = array_map('trim', $saveStrip);

        echo '<pre>';
        var_dump($save);
        echo '</pre>';

        echo "<p class='trigger accept'>Cadastro com sucesso!</p>";
    }
}

/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

echo '<pre>';
var_dump($_GET);
echo '</pre>';

$get = filter_input(INPUT_GET, 'mail', FILTER_DEFAULT);
$getArray = filter_input_array(INPUT_GET, FILTER_DEFAULT);

echo '<pre>';
var_dump([
    $get,
    $getArray
]);
echo '</pre>';

$form->method = 'get';
include __DIR__ . '/form.php';

/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);

echo '<pre>';
var_dump([
    filter_list(),
    filter_id('validate_email'),
]);
echo '</pre>';

$filterForm = [
    'name' => FILTER_SANITIZE_STRIPPED,
    'mail' => FILTER_VALIDATE_EMAIL,
];

$getForm = filter_input_array(INPUT_GET, $filterForm);

echo '<pre>';
var_dump([
    $getForm
]);
echo '</pre>';

// Recendo os dados, usar filter_input
// Dados já recebidos, usar filter_var

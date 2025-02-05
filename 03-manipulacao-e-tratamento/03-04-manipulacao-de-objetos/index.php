<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    'name' => 'Fulano',
    'company' => 'Aquela empresa',
    'mail' => 'fulano@aquelaempresa.com.br'
];

$ObjProfile = (object)$arrProfile;

echo '<pre>';
var_dump(
    $arrProfile,
    $ObjProfile
);
echo '</pre>';

echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p>{$ObjProfile->name} trabalha na {$ObjProfile->company}</p>";

$ceo = $ObjProfile;
unset($ceo->company);

echo '<pre>';
var_dump($ceo);
echo '</pre>';

$company = new stdClass();

$company->company = 'Aquela Empresa';
$company->ceo = $ceo;
$company->manager = new stdClass();
$company->name = 'Ciclano';
$company->mail = 'ciclano@aquelaempresa.com.br';

echo '<pre>';
var_dump($company);
echo '</pre>';

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

echo '<pre>';
var_dump([
    'class' => get_class($date),
    'methods' => get_class_methods($date),
    'vars' => get_object_vars($date),
    'parent' => get_parent_class($date),
    'subclass' => is_subclass_of($date, 'DateTime')
]);
echo '</pre>';

$exception = new PDOException();

echo '<pre>';
var_dump([
    'class' => get_class($exception),
    'methods' => get_class_methods($exception),
    'vars' => get_object_vars($exception),
    'parent' => get_parent_class($exception),
    'subclass' => is_subclass_of($exception, 'Exception')
]);
echo '</pre>';
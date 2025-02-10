<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . '/classes/App/Template.php';
require __DIR__ . '/classes/Web/Template.php';

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

echo '<pre>';
var_dump(
    $appTemplate,
    $webTemplate
);
echo '</pre>';

use App\Template;
use Web\Template as WebTemplate;

$appUserTemplate = new Template();
$webUserTemplate = new WebTemplate();

echo '<pre>';
var_dump(
    $appUserTemplate,
    $webUserTemplate
);
echo '</pre>';

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . '/source/Qualifield/User.php';

$user = new User();

// $user->firstName = 'Fulano';
// $user->lastName = 'Silva';

// $user->setFirstName('Fulano');
// $user->setFirstName('Silva');

echo '<pre>';
var_dump(
    $user,
    get_class_methods($user)
);
echo '</pre>';

echo "<p>O email de {$user->getFirstName()} é {$user->getMail()}</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);


$fulano = $user->setUser(
    'Fulano',
    'Silva',
    'cursos@email.com'
);

if (!$fulano) {
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

$ciclano = $user->setUser(
    'Ciclano',
    'Ferreira',
    'cursos@email.com'
);

echo '<pre>';
var_dump(
    $user,
    $ciclano
);
echo '</pre>';
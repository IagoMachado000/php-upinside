<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.02 - Classes, propriedades e objetos");

/*
 * [ classe e objeto ] http://php.net/manual/pt_BR/language.oop5.basic.php
 */
fullStackPHPClassSession("classe e objeto", __LINE__);

require __DIR__ . '/classes/User.php';

// Novo objeto da classe
$user = new User();

echo '<pre>';
var_dump($user);
echo '</pre>';

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.properties.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

$user->firstName = 'Fulano';
$user->lastName = 'Silva';
$user->mail = 'cursos';

echo '<pre>';
var_dump($user);
echo '</pre>';

echo "O email de {$user->firstName} é {$user->mail}";

/*
 * [ métodos ] São as funções que definem o comportamento e a regra de negócios de uma classe
 */
fullStackPHPClassSession("métodos", __LINE__);

$user->setFirstName('Ciclano');
$user->setLastName('Pereira');

if (!$user->setMail('teste@email.com')) {
    echo "<p class='trigger error'>O email {$user->getMail()} não é válido</p>";
}

$user->mail = 'curso';

echo '<pre>';
var_dump($user);
echo '</pre>';

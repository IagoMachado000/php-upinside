<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/**
 * 
 */
fullStackPHPClassSession("Constantes", __LINE__);

// Run time da aplicação - é interpretado enquanto a aplicação é executada
define('COURSE', 'Full Stack PHP');

// Compile time - ocorre antes da execução (Ex: não é possível usar dentro de uma condição) 
const AUTHOR = 'Fulano';

$formation = true;
if ($formation) {
    define('COURSE_TYPE', 'Formação');
    //const TESTE = 'teste';
} else {
    define('COURSE_TYPE', 'Curso');
}

echo "<p>COURSE COURSE_TYPE AUTHOR</p>";
echo "<p>{COURSE} {COURSE_TYPE} {AUTHOR}</p>";
echo "<p>", COURSE, " ", COURSE_TYPE, " ", AUTHOR, "</p>";
echo "<p>" . COURSE . " " . COURSE_TYPE . " " . AUTHOR . "</p>";

// O uso correto de const é dentro de uma classe
class Config
{
    const USER = 'host';
    const HOST = 'localhost';
}

//Quando temos constantes na classe, podemos acessa-lás diretamente pelo nome da classe
echo "<p>", Config::USER, "</p>";
echo "<p>", Config::HOST, "</p>";

fullStackPHPClassSession("Constantes mágicas", __LINE__);

echo '<pre>';
var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);
echo '</pre>';

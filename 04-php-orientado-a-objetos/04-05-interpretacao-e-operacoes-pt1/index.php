<?php

use Source\Interpretation\User;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

// $user = new \Source\Interpretation\User();
$user = new User(
    "Fulano",
    "Silva",
    "fulano@email.com"
);

echo '<pre>';
var_dump($user);
echo '</pre>';

/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

/**
 * Aqui, ao invés de criar um novo objeto, estamos referenciando o objeto
 * user na variável ciclano - $var = &$var
 */
$fulano = $user;
$ciclano = $fulano;
$ciclano->setFName('Ciclano');

/**
 * Para clonar um objeto, temos a palavra reservada clone
 */

$beltrano = clone $ciclano;
$beltrano->setFName('Beltrano');

$outro = clone $beltrano;
$outro->setFName('Outro');

/**
 * Destruindo um objeto antes do método __destruct
 */
$outro = null;

echo '<pre>';
var_dump(
    $fulano,
    $ciclano,
    $beltrano,
    $outro
);
echo '</pre>';

/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);
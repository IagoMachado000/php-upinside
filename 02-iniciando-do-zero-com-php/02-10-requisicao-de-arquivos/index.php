<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de aruivos");

/**
 * 
 */
fullStackPHPClassSession("include, include_once", __LINE__);

include __DIR__ . "/header.php";

$profile = new stdClass();
$profile->name = "John Doe";
$profile->company = "Google";
$profile->mail = "johndoe@gmail.com";

include __DIR__ . "/profile.php";

$profile = new stdClass();
$profile->name = "Fulano da Silva";
$profile->company = "Google";
$profile->mail = "fulano@gmail.com";

include __DIR__ . "/profile.php";

fullStackPHPClassSession("require, require_once", __LINE__);

echo '<pre>';
var_dump(
    require __DIR__ . "/config.php",
    require_once __DIR__ . "/config.php"
);
echo '</pre>';

echo '<h1>' . COURSE . '</h1>';

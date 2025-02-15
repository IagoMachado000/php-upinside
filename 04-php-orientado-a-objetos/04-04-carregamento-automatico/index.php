<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.04 - Carregamento automático");

/*
 * [ autoload spl psr-4 ] Carregamento de suas classes com spl_autoload psr-4
 */
fullStackPHPClassSession("autoload spl psr-4", __LINE__);

// require __DIR__ . '/source/Loading/Address.php';
// require __DIR__ . '/source/Loading/Company.php';
// require __DIR__ . '/source/Loading/User.php';

require __DIR__ . '/source/autoload.php';

$address = new \Source\Loading\Address();
$company = new \Source\Loading\Company();
$user = new \Source\Loading\User();

echo '<pre>';
var_dump(
    $address,
    $company,
    $user
);
echo '</pre>';

/*
 * [ autoload composer psr-4 ] https://getcomposer.org/doc/00-intro.md
 */
fullStackPHPClassSession("autoload composer psr-4", __LINE__);

require __DIR__ . "/vendor/autoload.php";

$mail = new \PHPMailer\PHPMailer\PHPMailer(); 

echo '<pre>';
var_dump($mail);
echo '</pre>';
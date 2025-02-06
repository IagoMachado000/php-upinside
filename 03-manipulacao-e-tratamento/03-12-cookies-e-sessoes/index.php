<?php
// session_start();

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

// Criar um cookie: NOME | VALOR | TEMPO DE VIDA
setcookie('fsphp', 'Esse é o meu cookie', time() + 60);

// Removendo um cookie
// setcookie('fsphp', 'null', time() - 60);

// Pegando cookies
$cookie = filter_input_array(INPUT_COOKIE, FILTER_UNSAFE_RAW);
if ($cookie) {
    array_walk($cookie, function (&$value) {
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    });
}


echo '<pre>';
var_dump(
    $_COOKIE,
    $cookie
);
echo '</pre>';

// Criando intervalo de tempos: Cookie terá um tempo de vida de 7 dias
$time = time() + 60 * 60 * 24 * 7;

$user = [
    'user' => 'root',
    'passwd' => '12345',
    'expire' => $time
];

setcookie(
    'fslogin',
    http_build_query($user),
    $time,
    '/',
    'localhost'
);

$login = htmlspecialchars(filter_input(INPUT_COOKIE, 'fslogin', FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH), ENT_QUOTES, 'UTF-8');

if ($login) {
    echo '<pre>';
    var_dump($login);
    parse_str($login, $user);
    var_dump($user);
    echo '</pre>';
}


/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);

// Uma sessão é um arquivo
$folder = __DIR__ . '/sessions';
if (!file_exists($folder) && !is_dir($folder)) {
    mkdir($folder);
}

session_save_path($folder);
session_start();

echo '<pre>';
var_dump([
    $_SESSION,
    [
        'id' => session_id(),
        'name' => session_name(),
        'status' => session_status(),
        'save_path' => session_save_path(),
        'cookie' => session_get_cookie_params(),
    ]
]);
echo '</pre>';

$_SESSION['login'] = (object)$user;
$_SESSION['user'] = $user;

// Excluindo uma sessão
unset($_SESSION['user']);

// Excluindo todas as sessões
session_destroy();

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
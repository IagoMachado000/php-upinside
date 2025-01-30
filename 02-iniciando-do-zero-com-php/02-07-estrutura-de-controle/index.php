<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/**
 * 
 */
fullStackPHPClassSession("if, elsif, else", __LINE__);

$test = true;

if ($test) {
    echo '<pre>';
    var_dump(true);
    echo '</pre>';
} else {
    echo '<pre>';
    var_dump(false);
    echo '</pre>';
}

$age = 51;

if ($age < 20) {
    echo '<pre>';
    var_dump('bandas coloridas');
    echo '</pre>';
} elseif ($age > 20 && $age < 50) {
    echo '<pre>';
    var_dump('Ótimas bandas');
    echo '</pre>';
} else {
    echo '<pre>';
    var_dump('Rock and Roll raiz');
    echo '</pre>';
}

$hour = 23;

if ($hour >= 5 || $hour < 23) {
    if ($hour < 7) {
        echo '<pre>';
        var_dump('Bob Marley');
        echo '</pre>';
    } else {
        echo '<pre>';
        var_dump('After Bridge');
        echo '</pre>';
    }
} else {
    echo '<pre>';
    var_dump('ZZZZZzzzzzZZZZ');
    echo '</pre>';
}

if ($hour >= 5 && $hour < 23) {
    if ($hour < 7) {
        echo '<pre>';
        var_dump('Bob Marley');
        echo '</pre>';
    } else {
        echo '<pre>';
        var_dump('After Bridge');
        echo '</pre>';
    }
} else {
    echo '<pre>';
    var_dump('ZZZZZzzzzzZZZZ');
    echo '</pre>';
}

fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = '';

if (isset($rock)) {
    echo '<pre>';
    var_dump('Rock and Roll');
    echo '</pre>';
} else {
    echo '<pre>';
    var_dump('Die');
    echo '</pre>';
}

if (!isset($rock)) {
    echo '<pre>';
    var_dump('Rock and Roll');
    echo '</pre>';
} else {
    echo '<pre>';
    var_dump('Die');
    echo '</pre>';
}

$rockAndRoll = 'AC/DC';

if (empty($rockAndRoll)) {
    echo '<pre>';
    var_dump("Rock existe e toca {$rockAndRoll}");
    echo '</pre>';
} else {
    echo '<pre>';
    var_dump('Não existe ou não está tocando');
    echo '</pre>';
}

fullStackPHPClassSession("switch", __LINE__);

$payment = 'canceled';

switch ($payment) {
    case 'billet_printed':
        echo '<pre>';
        var_dump('Boleto impresso');
        echo '</pre>';
        break;
    case 'canceled':
        echo '<pre>';
        var_dump('Pagamento cancelado');
        echo '</pre>';
        break;
    case 'past_due':
    case 'pending':
        echo '<pre>';
        var_dump('Aguardando pagamento');
        echo '</pre>';
        break;
    case 'approved':
    case 'completed':
        echo '<pre>';
        var_dump('Pagamento aprovado');
        echo '</pre>';
        break;
    default:
        echo '<pre>';
        var_dump('Erro ao processar pagamento');
        echo '</pre>';
        break;
}

<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 * 
 * A associação ocorre quando temos uma propriedade em um objeto destinada a um
 * novo objeto, ou seja, a outra classe 
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new \Source\Related\Company();
$company->bootCompany(
    'UpInside',
    'Nome da rua'
);

echo '<pre>';
var_dump($company);
echo '</pre>';

$address = new \Source\Related\Address('Rua das flores', '2010', 'Bloco 2');
$company->boot(
    'UpInside',
    $address
);

echo '<pre>';
var_dump($company);
echo '</pre>';

echo "A {$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()}";

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$productA = new \Source\Related\Product('Full Stack PHP', 1997);
$productB = new \Source\Related\Product('Laravel Developer', 997);

echo '<pre>';
var_dump(
    $productA,
    $productB
);
echo '</pre>';

$company->addProduct($productA);
$company->addProduct($productB);

echo '<pre>';
var_dump(
    $company
);
echo '</pre>';

/**
 * @var \Source\Related\Product $product
 */
foreach ($company->getProducts() as $product) {
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember('CEO', 'Fulano', 'Silva');
$company->addTeamMember('Manager', 'Ciclano', 'Ferraz');

echo '<pre>';
var_dump(
    $company
);
echo '</pre>';

/**
 * @var \Source\Related\User $member
 */
foreach ($company->getTeam() as $member) {
    echo "<p>{$member->getJob()}: {$member->getFN()} {$member->getLN()}</p>";
}

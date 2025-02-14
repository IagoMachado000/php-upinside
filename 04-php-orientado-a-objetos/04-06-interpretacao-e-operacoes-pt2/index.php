<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.06 - Interpretação e operações pt2");

require __DIR__ . "/source/autoload.php";

/*
 * [ set ] Executado altomaticamente quando se tenta criar uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.set
 *
 * inacessível = propridade é privada ou não existe
 */
fullStackPHPClassSession("__set", __LINE__);

$product = new \Source\Interpretation\Product();

$product->handler('Full Stack PHP Developer', 1997);

$product->name = 'FSPHP';
$product->title = 'FSPHP';
$product->value = 1997;
// $product->price = 1997;

echo '<pre>';
var_dump($product);
echo '</pre>';

$product->title = 'Full Stack PHP Developer';
$product->company = 'UpInside';

/*
 * [ get ] Executado automaticamente quando se tenta obter uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.get
 *
 */
fullStackPHPClassSession("__get", __LINE__);

echo "O curso {$product->title} da {$product->company} é o e melhor curso de PHP do mercado!";

/*
 * [ isset ] Executada automaticamente quando um teste ISSET ou EMPTY é executado em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.isset
 */
fullStackPHPClassSession("__isset", __LINE__);

isset($product->phone);
isset($product->name);
empty($product->address);

echo '<pre>';
var_dump($product);
echo '</pre>';

/*
 * [ call ] Executada automaticamente quando se tenta usar um método inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.call
 *
 */
fullStackPHPClassSession("__call", __LINE__);

$product->notFound('Ooops', 'teste');
$product->setPrice(1997, 10);

/*
 * [ unset ] Executada automaticamente quando se tenta usar unset em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.unset
 */
fullStackPHPClassSession("__toString", __LINE__);

echo $product;

/*
 * [ unset ] Executada automaticamente quando se tenta usar unset em uma propriedade inacessível
 * http://php.net/manual/pt_BR/language.oop5.overloading.php#object.unset
 */
fullStackPHPClassSession("__unset", __LINE__);

unset(
    $product->name,
    $product->price,
    $product->data,
    $product->title,
);

echo '<pre>';
var_dump($product);
echo '</pre>';

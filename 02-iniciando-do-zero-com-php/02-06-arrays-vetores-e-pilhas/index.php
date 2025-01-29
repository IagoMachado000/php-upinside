<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * 
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1, 2, 3);
$arrA = [0, 1, 2, 3];

echo '<pre>';
var_dump($arrA);
echo '</pre>';

$arrayIndex = [
    'Brian',
    'Angus',
    'Malcolm'
];

$arrayIndex[] = 'Cliff';
$arrayIndex[] = 'Phil';

echo '<pre>';
var_dump($arrayIndex);
echo '</pre>';

fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    'vocal' => 'Brian',
    'solo_guitar' => 'Angus',
    'base_guitar' => 'Malcolm',
    'bass_guitar' => 'Cliff',
];
$arrayAssoc['drums'] = 'Phil';
$arrayAssoc['rock_band'] = 'AC/DC';

echo '<pre>';
var_dump($arrayAssoc);
echo '</pre>';

fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ['Brian', 'Mic'];
$angus = ['name' => 'Angus', 'instrument' => 'Guitar'];
$instruments = [
    $brian,
    $angus
];

echo '<pre>';
var_dump($instruments);
echo '</pre>';

echo '<pre>';
var_dump([
    'brian' => $brian,
    'angus' => $angus
]);
echo '</pre>';

fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    'band' => 'AC/DC',
    'vocal' => 'Brian',
    'solo_guitar' => 'Angus',
    'base_guitar' => 'Malcolm',
    'bass_guitar' => 'Cliff',
    'drums' => 'Phil'
];

echo "<p>O vocal da banda AC/DC é {$acdc['vocal']}, e junto com {$acdc['base_guitar']} fazem um ótimo show de rock</p>";

$perl = [
    'band' => 'Pearl Jam',
    'vocal' => 'Eddie',
    'solo_guitar' => 'Mike',
    'base_guitar' => 'Stone',
    'bass_guitar' => 'Jeff',
    'drums' => 'Jack'
];

$rockBands = [
    'acdc' => $acdc,
    'pearl_jam' => $perl,
];

echo '<pre>';
var_dump($rockBands);
echo '</pre>';

echo "<p>{$rockBands['pearl_jam']['vocal']}</p>";

foreach ($acdc as $value) {
    echo "<p>{$value}</p>";
}

foreach ($acdc as $key => $value) {
    echo "<p>{$value} is {$key}</p>";
}

foreach ($rockBands as $band) {
    echo '<pre>';
    var_dump($band);
    echo '</pre>';
}

foreach ($rockBands as $band) {
    $art = "
        <article>
            <h1>%s</h1>
            <p>%s</p>
            <p>%s</p>
            <p>%s</p>
            <p>%s</p>
            <p>%s</p>
        </article>
    ";
    vprintf($art, $band);
}

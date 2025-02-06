<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.10 - Upload de arquivos");

/*
 * [ upload ] sizes | move uploaded | url validation
 * [ upload errors ] http://php.net/manual/pt_BR/features.file-upload.errors.php
 */
fullStackPHPClassSession("upload", __LINE__);

$folder = __DIR__ . '/storage';

if (!is_file($folder) && !is_dir($folder)) {
    mkdir($folder, 0755);
}

// Configurações do servidor
echo '<pre>';
var_dump([
    'filesize' => ini_get('upload_max_filesize'), // máximo tamanho de um arquivo
    'postsize' => ini_get('post_max_size'), // máximo somando todos os dados enviados
]);
echo '</pre>';

echo '<pre>';
var_dump([
    filetype(__DIR__ . '/index.php'),
    mime_content_type(__DIR__ . '/index.php') // sempre validar o mime_content_type do arquivo
]);
echo '</pre>';

// Confirmar o post
$getPost = filter_input(INPUT_GET, 'post', FILTER_VALIDATE_BOOL);

if ($_FILES && !empty($_FILES['file']['name'])) {
    // Verifica a existência de um input file e se existe o arquivo

    $fileUpload = $_FILES['file'];

    echo '<pre>';
    var_dump([
        $_FILES,
        $fileUpload
    ]);
    echo '</pre>';

    // Tipos permitidos
    $tiposPermitidos = [
        'image/jpg',
        'image/jpeg',
        'image/png',
        'application/pdf',
    ];

    $newFileName = time() . mb_strstr($fileUpload['name'], '.');
    echo '<pre>';
    var_dump($newFileName);
    echo '</pre>';

    if (in_array($fileUpload['type'], $tiposPermitidos)) {
        // Validando o tipo do arquivo

        if (move_uploaded_file($fileUpload['tmp_name'], $folder . '/' . $newFileName)) {
            // Movendo o arquivo pra o destino

            echo "<p class='trigger accept'>Arquivo enviado com sucesso</p>";

        } else {

            echo "<p class='trigger error'>Erro inesperado</p>";

        }

    } else {

        echo "<p class='trigger error'>Tipo de arquivo não permitido</p>";
    }

} elseif ($getPost) {

    // Se o arquivo estourar o limite do servidor (temos o post, mas sem arquivo, então provavelmente estourou o limite)
    echo "<p class='trigger warning'>Wooops, parece que o arquivo é muito grande!</p>";

} else {

    if ($_FILES) {

        // Se o usuário interagir com o form, mas não enviar o arquivo
        echo "<p class='trigger warning'>Selecione um arquivo antes de enviar!</p>";

    }
}

include __DIR__ . '/form.php';
echo '<pre>';
var_dump(scandir($folder));
echo '</pre>';

<article style="
    padding: 5px 20;
    background-color: #eee;
    border-radius: 4px;
">
    <h1><?= $profile->name; ?></h1>
    <p>
        Trabalha no <?= $profile->company; ?>
        <br>
        <a href="mailto:" title="Enviar email">
            <?= $profile->mail; ?>
        </a>
    </p>
</article>
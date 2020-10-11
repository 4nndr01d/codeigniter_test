<h1>Все новости</h1>

<?php foreach ($news as $key => $value) : ?>

    <h2>
        <a href="/news/view/<?= $value['slug']; ?>"><?= $value['title']; ?></a> |
        <a href="/news/edit/<?= $value['slug']; ?>">edit <?= $value['title']; ?></a> |
        <a href="/news/delete/<?= $value['slug']; ?>"> X </a>
    </h2>

<?php endforeach ?>


<h2>
    <a href="create">Добавить новость</a>
</h2>
<form action="/news/edit/" method="post" >

    <input class="form-control input-lg" type="text" name="slug" value="<?= $slug_news ?>" placeholder="slug" >
    <br>
    <input class="form-control input-lg" type="text" name="title" value="<?= $title_news ?>" placeholder="News name" >
    <br>
    <textarea class="form-control input-lg" name="text" placeholder="News text"><?= $text_news ?></textarea>
    <br>
    <input class="btn btn-default" type="submit" name="submit" value="edit news">
</form>
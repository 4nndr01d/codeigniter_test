<h1><?= $title; ?></h1>
<hr>

<?php foreach ($movie_data as $key => $movie) { ?>
    <div class="row">
        <div class="well clearfix ">



            <div class="col-lg-3 col-md-2 text-center">
                <img class="img-thumbnail" src="<?= $movie['poster']; ?>" alt="Интерстеллар">
                <p><?= $movie['name']; ?></p>
            </div>
            <div class="col-lg-9 col-md-10">
                <p><?= $movie['descriptions']; ?></p>
            </div>

            <div class="col-lg-12">
                <a href="/movies/view/<?= $movie['slug']; ?>" class="btn btn-warning btn-lg pull-right">Подробнее</a>
            </div>

        </div>
    </div>
<?php } ?>

<?= $pagination; ?>
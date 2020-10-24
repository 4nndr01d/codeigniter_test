<h2>Новые фильмы</h2>
<hr>
<div class="row">

    <?php foreach ($movies as $key => $movie) { ?>
        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <a href="/movies/view/<?= $movie['slug']; ?>/" ><img src="<?= $movie['poster']; ?>" alt="<?= $movie['name']; ?>"></a>
            <div class="fil_lable"><?= $movie['name']; ?></div>
        </div>
    <?php } ?>

</div>

<div class="margin-8"> </div>

<h2>Новые сериалы</h2>
<hr>
<div class="row">

    <?php foreach ($serials as $key => $serial) { ?>
        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <img src="<?= $serial['poster']; ?>" alt="<?= $serial['name']; ?>">
            <div class="fil_lable"><?= $serial['name']; ?></div>
        </div>
    <?php } ?>

</div>

<div class="margin-8"> </div>

<a href="#">
    <h3>Как снимали Интерстеллар</h3>
</a>
<hr>

<p>
    45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи
    работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом
    изначально занималась студия Paramount. Когда Кристофер Нолан занял место режиссера, студия
    Warner Bros., которая выпускала его последние фильмы, добилась участия в проекте.
</p>
<a href="#" class="btn btn-warning pull-right">Читать</a>


<a href="#">
    <h3>Актер Том Хенкс поделился впечатлением о фестивале</h3>
</a>
<hr>

<p>
    16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо
    ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл,
    Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.
</p>
<a href="#" class="btn btn-warning pull-right">Читать</a>

<div class="margin-8 clear"> </div>
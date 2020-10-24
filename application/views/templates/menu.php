</div>
<div class="col-lg-3 col-lg-pull-9">

    <div class="panel panel-info hidden-xs">
        <div class="panel-heading">
            <div class="sidebar-header">Поиск</div>
        </div>
        <div class="panel-body">
            <form role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="search" class="form-control input-lg" placeholder="Поиск">
                        <div class="input-group-btn">
                            <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="sidebar-header">Вход</div>
        </div>
        <div class="panel-body">
            <?php if (!$this->dx_auth->is_logged_in()): ?>
                <form role="form" action="/auth/login" method="post" >
                    <div class="form-group">
                        <input type="text" class=" form-control login input-lg" placeholder="Логин" name="username" >
                    </div>
                    <div class="form-group">
                        <input type="text" class=" form-control password input-lg" placeholder="Пароль" name="password" >
                    </div>

                    <button type="submit" class="btn btn-warning pull-right">Вход</button>
                </form>
            <?php else: ?>
                Здравствуйте, <?php echo $this->dx_auth->get_username(); ?>
            <a href="/auth/logout" class="btn btn-warning pull-right" >Выход</a>
            <?php endif; ?>
        </div>
    </div>


    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="sidebar-header"> <a class="menu-news_title" href="/news/">Новости</a></div>
        </div>
        <div class="panel-body">

            <?php foreach ($news as $key => $value) { ?>

                <p><a href="/news/view/<?= $value['slug'] ?>"><?= $value['title'] ?></a></p>

            <?php } ?>

        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="sidebar-header">Рейтинг фильмов</div>
        </div>
        <div class="panel-body">

            <?php foreach ($films as $key => $film) { ?>
                <ul class="list-group">
                    <li class="list-group-item list-group-warning">
                        <span class="badge"><?= $film['rating'] ?></span>
                        <a href="/movies/view/<?= $film['slug']; ?>/"><?= $film['name'] ?></a>
                    </li>
                <?php } ?>

                </ul>

        </div>
    </div>

</div>
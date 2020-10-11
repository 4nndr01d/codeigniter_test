<h1><?= $title; ?></h1>
                    <hr>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= $player_code; ?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                    <div class="well info-block text-center">
                        Год: <span class="badge"><?= $year; ?></span>
                        Рейтинг: <span class="badge"><?= $rating; ?></span>
                        Режиссер: <span class="badge"><?= $producer; ?></span>
                    </div>

                    <div class="margin-8"></div>

                    <h2>Описание <?= $title; ?></h2>
                    <hr>

                    <div class="well">
                        <?= $description_movie; ?>
                    </div>

                    <div class="margin-8"></div>

                    <h2>Отзывы <?= $title; ?></h2>

                    <hr>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>Сергей</span>
                        </div>
                        <div class="panel-body">
                            Отличный фильм
                        </div>
                    </div>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>Максим</span>
                        </div>
                        <div class="panel-body">
                            Поддерживаю, фильм реально крутой
                        </div>
                    </div>
                    
                    <form >
                        <div class="form-group">
                            <input type="text" placeholder="Ваше Имя" class="form-control input-lg">
                        </div>

                        <div class="form-group" >
                            <textarea class="form-control"></textarea>
                        </div>

                        <button class="btn btn-lg btn-warning pull-right">Отправить</button>
                    </form>
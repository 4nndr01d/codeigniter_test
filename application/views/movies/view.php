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

                    <?php foreach ($comments as $comment){?>

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-user"></i>
                            <span><?= getUserNameById($comment['user_id'])->username; ?></span>
                        </div>
                        <div class="panel-body">
                            <?= $comment['comment_text']; ?>
                        </div>
                    </div>
                    <?php }?>
                    <form >

                        <div class="form-group" >
                            <textarea class="form-control"></textarea>
                        </div>

                        <button class="btn btn-lg btn-warning pull-right">Отправить</button>
                    </form>
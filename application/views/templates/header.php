<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <nav role="navigation" class="navbar navbar-inverse">
                <div class="container">

                    <div class="navbar-header header">

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1><a href="/">Киномонстр</a></h1>
                                    <p>Кино - наша страсть!</p>
                                </div>
                            </div>
                        </div>

                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse"
                            class="navbar-toggle">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">

                        <ul class="nav nav-pills">
                            <li class="active"> <a href="/">Главная</a> </li>
                            <li> <a href="/movies/type/films/">Фильмы</a> </li>
                            <li> <a href="/movies/type/serials/">Сериалы</a> </li>
                            <li> <a href="/rating.html">Рейтинг фильмов</a> </li>
                            <li> <a href="/contacts.html">Контакты</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-push-3 ">

                    <form role="search" class="visible-xs">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" class="form-control input-lg" placeholder="Поиск">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-lg" type="submit"><i
                                            class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
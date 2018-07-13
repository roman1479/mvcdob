<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Городской портал</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">Главная</a></li>
                <li ><a href="/reg/" >Зарегистрироваться</a></li>
                <li><a href="login.html">Войти</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <div class="banner">
            <h1>Привет, дорогой друг!</h1>
            <p>
                Вместе мы сможем улучшить наш любимый город. Нам очень сложно узнать обо всех проблемах города, поэтому мы
                предлагаем тебе помочь своему городу!
            </p>
            <p>
                Увидел проблему? Дай нам знать о ней и мы ее решим!
            </p>
            <p>
                <a class="btn btn-success btn-lg" href="#" role="button">Сообщить о проблеме</a>
                <a class="btn btn-primary btn-lg" href="#" role="button">Присоедениться к проекту</a>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <h2>Последние решенные проблемы</h2>
    <br>
    <div class="row">
        <div class="search">
            <form action="/main/search" method="POST">
                <input type="search" name="search" class="search">
                <input type="submit" name="submit" class="submit" value="Поиск">
            </form>
        </div>
        <div class="filtr">
            <a href="/">Все</a>
            <a href="/main/new">Новые</a>
            <a href="/main/resh">Решено</a>
            <a href="/main/otkl">Отклонено</a>
        </div>
        <div class="application">
            <?php
            foreach($data as $row){
                ?>
                <div class="polnoe">
                    <h2>Заявка № <?php echo $row['id_application']; ?></h2>
                    <div class="" style="display: flex;">
                        <div class="col-md-6 photo1">
                            <h3>Проблема</h3>
                            <div style="background: url(/images/<?php echo $row['photo1']; ?>);" class="photo1"></div>
                        </div>
                        <div class="col-md-6 photo2">
                            <h3>Решение</h3>
                            <div style="background: url(/images/<?php echo $row['photo2']; ?>);" class="photo2"></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
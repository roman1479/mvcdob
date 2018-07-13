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
                <li><a href="/">Главная</a></li>
                <li class="active"><a href="/reg/" >Зарегистрироваться</a></li>
                <li><a href="login.html">Войти</a></li>
                
            </ul>
        </div>
    </div>
</nav>
<div>
    <form action="/reg/send" method="POST" class="regform">
        <div id="error" class="error"></div>
        <h1>Регистрация</h1>
        <label for="fio">ФИО</label>
        <input type="text" name="fio" id="fio" required onchange="Fio()" placeholder="">

        <label for="login">Логин</label>
        <input type="text" name="login" id="login"  onchange="{vivodappl(this.value);}" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required onchange="Email()">

        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" required>

        <label for="password2">Повтор пароля</label>
        <input type="password" name="password2" id="password2" required onchange="Password2()">
        <input type="submit" id="submit" name="submit" value="Регистрация">
    </form>
</div>
<script type="text/javascript">
     function vivodappl(log) {
        var login = log;
        var data = $(this).serialize();
        var type = "registrationlogin";
        $.ajax({
            type: "POST",
            url: "//yakytsk.loc/reg/ajax/",
            data: {"data": data, "type": type, "login": login},
            success: function(result){
                var echo = result;
                if(echo == 0){
                    document.getElementById('login').style.borderColor="green";
                    $("#error").hide(1200);
                }
                else if(echo == 1){
                    document.getElementById('login').style.borderColor="red";
                    $('#error').html('Такой логин занят');
                    $( "#error" ).show( "slow" );
                }
            }
        })
    }
</script>
function Fio() {
    myelement = document.getElementById('fio').value;
    var pattern = /[а-яА-Я]+\s+[а-яА-Я]+\s+[а-яА-Я]/i;
    var prov = pattern.test(myelement);
    if (prov == true) {
        document.getElementById('fio').style.borderColor="green";
        document.getElementById('submit').disabled=false;
        // document.getElementById('error').innerHTML = '';
        $("#error").hide(1200);
    }
    else {
        document.getElementById('fio').style.borderColor="red";
        document.getElementById('submit').disabled=true;
        document.getElementById('error').innerHTML = 'фИО только кириллические буквы, без цифр и знаков препинания';
        // $("error").hide();
        $( "#error" ).show( "slow" );
        
    }
}
function Login() {
    myelement = document.getElementById('login').value;
    var pattern = /[a-zA-Z]/i;
    var prov = pattern.test(myelement);
    if (prov == true) {
        document.getElementById('login').style.borderColor="green";
        document.getElementById('submit').disabled=false;
        // document.getElementById('error').innerHTML = '';
        $("#error").hide(1200);
    }
    else {
        document.getElementById('login').style.borderColor="red";
        document.getElementById('submit').disabled=true;
        document.getElementById('error').innerHTML = 'Логин только латиница';
        $( "#error" ).show( "slow" );
    }
}
function Email() {
    myelement = document.getElementById('email').value;
    var pattern = /[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]/i;
    var prov = pattern.test(myelement);
    if (prov == true) {
        document.getElementById('email').style.borderColor="green";
        document.getElementById('submit').disabled=false;
        // document.getElementById('error').innerHTML = '';
        $("#error").hide(1200);
    }
    else {
        document.getElementById('email').style.borderColor="red";
        document.getElementById('submit').disabled=true;
        document.getElementById('error').innerHTML = 'Не валидный email';
        $( "#error" ).show( "slow" );
    }
}
function Password2() {
    var myelement = document.getElementById('password2').value;
    var myelement2 = document.getElementById('password').value;
    // var prov = pattern.test(myelement);
    if (myelement == myelement2) {
        document.getElementById('password').style.borderColor="green";
        document.getElementById('password2').style.borderColor="green";
        document.getElementById('submit').disabled=false;
        // document.getElementById('error').innerHTML = '';
        $("#error").hide(1200);
    }
    else {
        document.getElementById('password').style.borderColor="red";
        document.getElementById('password2').style.borderColor="red";
        document.getElementById('submit').disabled=true;
        document.getElementById('error').innerHTML = 'Пароли должны совпадать';
    }
}
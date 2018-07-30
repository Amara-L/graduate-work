<?php
require_once('../config/config.php');
$dblink = mysql_connect($hostname, $user, $pass);
mysql_select_db($db, $dblink);
mysql_query("SET character_set_results = 'utf8',
character_set_client = 'utf8',
character_set_connection = 'utf8',
character_set_database = 'utf8',
character_set_server = 'utf8'", $dblink);

header("content-type: text/html; charset=utf-8"); //Устанавливаем кодировку
session_start(); //Запускаем сессию

if(isset($_SESSION['id'])){header("location: ../php/dog.php");} // Если авторизирован - выполняем переход

// Регистрация
if(isset($_POST['reg_ok'])){ //  Если нажато - Зарегистрироваться
    if($_POST['password'] != $_POST['password2']){ // Если пароли не совпадают
        $_SESSION['msg'] = "Пароли не совпали!";}
    else{
        if(
            $_POST['login'] == '' ||
            $_POST['password'] == ''){ // Проверяем на заполнение [ * ] необходимых полей
            $_SESSION['msg'] = "Поля отмеченные * обязательны для заполнения!";} // => Если не заполнены - выдаём ошибку
        else{ // Иначе идём дальше
            $mail = $_POST['mail'];
            $login = $_POST['login'];
            $sql_res = mysql_query("SELECT id FROM users WHERE login='$login' OR mail='$mail'") or die(mysql_error());
            if(mysql_num_rows($sql_res) != 0 ){ // Если пользователь с такими данными существует
                $_SESSION['msg'] = "Пользователь с таким логином и/или почтой уже существует!";}
            else{

                $nameF = $_POST['nameF'];
                $nameI = $_POST['nameI'];
                $nameO = $_POST['nameO'];
                $data = $_POST['data'];
                $mest = $_POST['mest'];
                $mepro = $_POST['mepro'];
                $nunb = $_POST['nunb'];
                $vidn = $_POST['vidn'];
                $code = $_POST['code'];
                $davi = $_POST['davi'];
                $telf = $_POST['telf'];
                $mail = $_POST['mail'];
                $login = $_POST['login'];
                $password = $_POST['password'];
                $ip = $_SERVER['REMOTE_ADDR'];

                $sql_r = "INSERT INTO `users`(`name`, `surname`, `patronymic`, `dob`, `bpl`, `residence`, `passportID`, `issued`, `division_code`, `doi`, `mail`, `telf`, `login`, `password`, `ip`)
    VALUES ('{$nameI}','{$nameF}','{$nameO}','{$data}','{$mest}','{$mepro}','{$nunb}','{$vidn}','{$code}','{$davi}','{$mail}','{$telf}','{$login}','{$password}','{$ip}')";

//                include_once "../config.php";
                $link = mysqli_connect($hostname, $user, $pass, $db) or die("Не могу подключиться к базе данных! Причина:".mysqli_error($link));
                mysqli_query($link, "set names 'utf8'");

                if(mysqli_query($link, $sql_r)){
                }
                else {
                    echo 'Ошибка123<br/>'; die();
                }

                // Определяем новый id
                $id = mysql_insert_id();
                $sql_res = mysql_query("SELECT * FROM users WHERE id=$id");
                $arr = mysql_fetch_assoc($sql_res);
                $_SESSION['id'] = $arr['id']; // Сохраняем его в сессию
                $id = $_SESSION['id'];
//                $usr = mysqli_fetch_assoc(mysqli_query("SELECT * FROM reg WHERE id=$id")); // =========> Забираем значение
                header("location: ../php/dog.php"); exit;}}}} // Bыполняем переход

if(isset($_POST['avto_ok'])){ // Если нажато - Войти

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql_res = mysql_query("SELECT * FROM users WHERE login='$login'") or die(mysql_error()); // Ищем в таблице

    if(mysql_num_rows($sql_res) != 0 ){ // Если запись есть
        $arr = mysql_fetch_assoc($sql_res);

        if($arr['password'] === $password){ // Если пароль введён верный
            $_SESSION['id'] = $arr['id']; // Записываем значение id в сессию
            $id = $_SESSION['id']; // Присваеваем в переменную $id
            header("location: ../php/dog.php"); exit;}
        else{
            $_SESSION['msg'] = "Неверный логин и/или пароль!";}}
    $_SESSION['msg'] = "Пользователь не найден!";}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Онлайн-нотариус</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]>
    <script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="../assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../assets/css/ie9.css"/><![endif]-->
</head>
<body>

<div id="page-wrapper">

    <header id="header">
        <h1><a href="../index.php">Онлайн-нотариус</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Меню</span></a>
                    <div id="menu">
                        <ul>
            <li><a href="../index.php">Главная</a></li>
            <li><a href="../identification/identification.php">Войти/Зарегистрироваться</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

<article id="main">
    <header>
        <h2>Идентификация</h2>
        <p></p>
    </header>
    <section class="wrapper style5">
        <center>
            <?php
            if(isset($_SESSION['msg'])){ // Если есть ОШИБКА
                echo $_SESSION['msg']; // ВЫВОДИМ
                unset ($_SESSION['msg']);} ?>

            <!--            кнопки-->
            <form action="" method="post">
                <button style="width:auto;
                     padding:5px 15px 5px 15px;
                     margin-left:50px;
                     -moz-appearance:none;
                     -webkit-appearance:none;
                     -ms-appearance:none;
                     appearance:none;
                     background-color:#FFF;
                     color:#666 !important;
                     cursor:pointer;
                     display:inline-block;
                     font-size:24px;
                     text-align:center;
                     text-decoration:none;
                     border:#999 1px solid;
                     -moz-border-radius:5px 5px 5px 5px;
                     -webkit-border-radius:5px 5px 5px 5px;
                     -khtml-border-radius:5px 5px 5px 5px;
                     border-radius:5px 5px 5px 5px;
                     behavior:url(border-radius.htc);" name="avt" type="submit">Авторизация</button>
                <button style="width:auto;
                     padding:5px 15px 5px 15px;
                     margin-left:50px;
                     -moz-appearance:none;
                     -webkit-appearance:none;
                     -ms-appearance:none;
                     appearance:none;
                     background-color:#FFF;
                     color:#666 !important;
                     cursor:pointer;
                     display:inline-block;
                     font-size:24px;
                     text-align:center;
                     text-decoration:none;
                     border:#999 1px solid;
                     -moz-border-radius:5px 5px 5px 5px;
                     -webkit-border-radius:5px 5px 5px 5px;
                     -khtml-border-radius:5px 5px 5px 5px;
                     border-radius:5px 5px 5px 5px;
                     behavior:url(border-radius.htc);" name="reg" type="submit">Регистрация</button>
            </form>

            <?php
            if(isset($_POST['avt'])){include "authorization.php";} // Если нажата АВТОРИЗАЦИЯ
            if(isset($_POST['reg'])){include "checkIn.php";}  // Если нажата РЕГИСТРАЦИЯ
            ?>
        </center>
    </section>
</article>

<?php
include("../include/footer.php");
?>

</body>
</html>
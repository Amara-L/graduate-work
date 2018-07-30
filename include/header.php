<?php
error_reporting( E_ERROR );
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root.'/config/config.php');
$link = mysqli_connect($hostname, $user, $pass, $db) or die("Не могу подключиться к базе данных! Причина:".mysqli_error($link));
header("content-type: text/html; charset=utf-8"); // Устанавливаем кодировку
session_start(); // Запускаем сессию

$id = $_SESSION['id']; // id Пользователя
$reult = mysqli_query($link,"SELECT * FROM users WHERE id='$id'");
$usr = mysqli_fetch_assoc($reult);
//  Выбираем данные
if(isset($_GET['stop'])) {
    session_destroy();
    unset($_GET['stop']);
}

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
<body class="landing">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="index.html">Онлайн-Нотариус</a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Меню</span></a>
                    <div id="menu">
                        <ul>
                            <?php
                            if(!empty($_SESSION['id']))
                                $id = $_SESSION['id'];
                            $sql = "SELECT * FROM `users` WHERE id = $id";
                            $result = mysqli_query($link, $sql);
                            if ($result) {
                                while($row = mysqli_fetch_array($result)){
                                    $namesession = $row['name'];
                                    echo '<li><p> Добро пожаловать, '.$namesession.'! </p><p><a href="/additional/personal_area.php">Личный кабинет</a></p><p><a href="/index.php?stop">Выход</a></p></li><li><a href="../index.php">Главная</a></li>';
                                }
                            } else {
                                echo '<li>
            <li><a href="../index.php">Главная</a></li>
            <li><a href="../identification/identification.php">Войти/Зарегистрироваться</a></li>';}
                            ?>

                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
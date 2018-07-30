
<?php
include("../include/header.php");
?>

<article id="main">
    <header>
        <h2>Личная информация</h2>
        <p></p>
    </header>
    <section class="wrapper style5">
        <div class="inner">
        <?php
        $red = (int)$_GET['red'];

        if(isset($_POST['red'])){
        if($_POST['password'] != $_POST['password2']){ // Если пароли не совпадают
            $_SESSION['msg'] = "Пароли не совпали!";}
        else {
            $id = $_SESSION['id'];
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

                $sql = "UPDATE `users` SET
            `name` = '{$nameI}',
            `surname` = '{$nameF}',
            `patronymic` = '{$nameO}',
            `dob` = '{$data}',
            `bpl` = '{$mest}',
            `residence` = '{$mepro}',
            `passportID` = '{$nunb}',
            `issued` = '{$vidn}',
            `division_code` = '{$code}',
            `doi` = '{$davi}',
            `mail` = '{$mail}',
            `telf` = '{$telf}',
            `login` = '{$login}',
            `password` = '{$password}'
          WHERE `id` = '{$id}'";
                echo $sql_r;
                if(mysqli_query($link, $sql)){} else echo 'Ошибка';

            }

        }

        if($red == 1){
        $sql = "SELECT * FROM users WHERE id='$id'";
        $result = mysqli_query($link, $sql);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                echo '
                    <p><a href="../additional/personal_area.php">Назад</a></br></p>
                    <form action="" method="post">
                    <p style="margin-bottom:5px; margin-left: 0%">
                        Фамилия: <input type="text" name="nameF" placeholder="Фамилия" style=" width: 75%" required value="' . $row['surname'].'"> <br>
                        Имя: <input type="text" name="nameI" placeholder="Имя" style=" width: 75%" required value=" ' . $row['name'] . '"> <br>
                        Отчество: <input type="text" name="nameO" placeholder="Отчество" style=" width: 75%" required value="' . $row['patronymic'].'"> <br>
                        Дата рождения: <input type="text" name="data" placeholder="Дата рождения" style=" width: 75%" required value="' . $row['dob'] . '"><br>
                        Место рождения: <input type="text" name="mest" placeholder="Место рождения" style=" width: 75%" required value="' . $row['bpl'].'">
                        <br>
                        Место проживания: <input type="text" name="mepro" placeholder="Место проживания" style=" width: 75%" required value="' . $row['residence'].'">
                        <br>
                        Серия и номер паспорта: <input type="text" name="nunb" placeholder="Серия и номер паспорта" style=" width: 75%" required value=" ' . $row['passportID'].'"> <br>
                        Выдан: <input type="text" name="vidn" placeholder="Выдан" style=" width: 75%" required value="' . $row['issued'] . '"> <br>
                        Код подразделения: <input type="text" name="code" placeholder="Код подразделения" style=" width: 75%" required value="' . $row['division_code'] . '"> <br>
                        Дата выдачи: <input type="text" name="davi" placeholder="Дата выдачи" style=" width: 75%" required value="' . $row['doi'] . '"> <br>
                        E-mail: <input type="email" name="mail" placeholder="E-mail" style=" width: 74.5%" required value="' . $row['mail'].'"> <br>
                        Контактный телефон: <input type="text" name="telf" placeholder="Контактный телефон" style=" width: 75%" required value="' . $row['telf'].'"><br>
                        Логин: <input name="login" type="text" placeholder="Логин"  style=" width: 75%" required value="' . $row['login'].'"><br>
                        Пароль: <input name="password" type="password" placeholder="Пароль" style=" width: 75%" value="' . $row['password'].'"><br>
                        Повторите пароль:
                        <input name="password2" type="password" placeholder="Повторите пароль" style=" width: 75%" value="' . $row['password'].'" ><br>

                        <button name="red" type="submit">Изменить</button>
                    </p>
                </form>';
            }
        }
        } else {
            $sql = "SELECT * FROM users WHERE id='$id'";
            $result = mysqli_query($link, $sql);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo '<p align="right"> <a href="../additional/personal_area.php?red=1"> <img src="../images/red.jpg" style="width: 4ex"></a>';
                    echo '<p><b>ФИО: </b> ' . $row['surname'] . ' ' . $row['name'] . ' ' . $row['patronymic'];
                    echo '<p><b>Дата и место рождения: </b> ' . $row['dob'] . ' ' . $row['bpl'];
                    echo '<p><b>Место проживания: </b> ' . $row['residence'];
                    echo '<p><b>Паспортные данные: </b> Выдан ' . $row['issued'] . ' ' . $row['division_code'] . ' ' . $row['doi'] . '</br> Серия, номер: ' . $row['passportID'];
                    echo '<p><b>Почта: </b> ' . $row['mail'];
                    echo '<p><b>Телефон: </b> ' . $row['telf'];
                }
            }
        }
        ?>

        </div>
    </section>
</article>

<?php
include("../include/footer.php");
?>

</body>
</html>
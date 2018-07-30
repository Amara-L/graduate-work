
<?php
include("../include/header.php");

//if(isset($_SESSION['id'])){}else {header("location: ../identification/identification.php");}
?>

<!--Скрипт отправки на печать-->
<script language="javascript">
    function CallPrint(strid) {
        var prtContent = document.getElementById(strid);
        var WinPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
        WinPrint.document.write('<div id="print" class="contentpane">');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.write('</div>');
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
        prtContent.innerHTML=strOldOne;
    }
</script>

    <article id="main">
        <header>
            <h2>Оформление договора</h2>
            <p></p>
        </header>
        <section class="wrapper style5">


            <div class="inni">

                <?php

                global $name;
                global $data;
                global $mest;
                global $nunb;
                global $vidn;
                global $code;
                global $davi;
                global $mail;
                global $telf;
                global $mepro1;
                global $r;
                global $name2;
                global $data2;
                global $mest2;
                global $mepro2;
                global $nunb2;
                global $vidn2;
                global $code2;
                global $davi2;
                global $date2;
                global $naim;
                global $sroc;
                global $fio3;
                global $step;
                global $sost;
                global $adr;
                global $adrdoma;

                if(isset($_SESSION['id'])){}else {echo '<center> Пожалуйста, для начала <a href="../identification/identification.php">авторизируйтесь</a>. </center>';}
                $sql = "SELECT * FROM users WHERE id='$id'";
                $result = mysqli_query($link, $sql);
                if ($result) {
                while ($row = mysqli_fetch_array($result)) {


                if (!empty($_GET['r'])) {
                    $GLOBALS["r"] = $_GET['r'];
                    if (!empty($GLOBALS["r"])) {

                        if ($GLOBALS["r"] == 'zai') {

                            ?>
                            <div id="forma">
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">
                                        <p style="text-align: center; font-size: 1.5em;">Ваши данные:</p><br>
<?php echo '
                                        ФИО: <input type="text" name="name" placeholder="ФИО" style=" width: 75%"
                                                    required
                                                    value="' . $row['surname'].' ' . $row['name'] . ' ' . $row['patronymic'].'">
                                        Дата рождения: <input type="text" name="data" placeholder="Дата рождения"
                                                              style=" width: 75%" required
                                                              value="' . $row['dob'] . '"><br>
                                        Место рождения: <input type="text" name="mest" placeholder="Место рождения"
                                                               style=" width: 75%" required value="' . $row['bpl'].'">
                                        <br>
                                        Серия и номер паспорта: <input type="text" name="nunb"
                                                                       placeholder="Серия и номер паспорта"
                                                                       style=" width: 75%" required
                                                                       value=" ' . $row['passportID'].'"> <br>
                                        Выдан: <input type="text" name="vidn" placeholder="Выдан" style=" width: 75%"
                                                      required value="' . $row['issued'] . '"> <br>
                                        Код подразделения: <input type="text" name="code"
                                                                  placeholder="Код подразделения" style=" width: 75%"
                                                                  required value="' . $row['division_code'] . '"> <br>
                                        Дата выдачи: <input type="text" name="davi" placeholder="Дата выдачи"
                                                            style=" width: 75%" required value="' . $row['doi'] . '">
                                        <br>
                                        E-mail: <input type="email" name="mail1" placeholder="E-mail"
                                                       style=" width: 74.5%" required value="' . $row['mail'].'"> <br>
                                        Контактный телефон: <input type="text" name="telf1"
                                                                   placeholder="Контактный телефон" style=" width: 75%"
                                                                   required value="' . $row['telf'].'"><br>
'; ?>
                                        <br>
                                        <p style="text-align: center; font-size: 1.5em;">Кому занимаем?</p><br>
                                        <input type="text" name="name2" placeholder="ФИО" style=" width: 75%" required>
                                        <br>
                                        <input type="text" name="data2" placeholder="Дата рождения" style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="mest2" placeholder="Место рождения" style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="nunb2" placeholder="Серия и номер паспорта"
                                               style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="vidn2" placeholder="Выдан" style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="code2" placeholder="Код подразделения"
                                               style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="davi2" placeholder="Дата выдачи" style=" width: 75%"
                                               required> <br>
                                        <br>
                                        <input type="text" name="date2" placeholder="Срок займа" style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="mone1" placeholder="Сумма займа" style=" width: 75%"
                                               required> <br>
                                        <br>
                                        <input type="text" name="mone2" placeholder="Сумма выплаты" style=" width: 75%"
                                               required> <br>
                                        <input type="checkbox" name="r1" value="zai" checked="checked"
                                               style=" width: 75%" required> <br>
                                        <br>

                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>

                            <?php
                        } elseif ($GLOBALS["r"] == 'dov_dog') {

                            ?>
                            <div id="forma">
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">
                                        <p style="text-align: center; font-size: 1.5em;">Ваши данные:</p><br>
                                        <?php echo '
                                        ФИО: <input type="text" name="name" placeholder="ФИО" style=" width: 75%"
                                                    required
                                                    value="' . $row['surname'].' ' . $row['name'] . ' ' . $row['patronymic'].'">
                                        Дата рождения: <input type="text" name="data" placeholder="Дата рождения"
                                                              style=" width: 75%" required
                                                              value="' . $row['dob'] . '"><br>
                                        Место рождения: <input type="text" name="mest" placeholder="Место рождения"
                                                               style=" width: 75%" required value="' . $row['bpl'].'">
                                        <br>
                                        Место проживания: <input type="text" name="mepro" placeholder="Место проживания" style=" width: 75%" required value="' . $row['residence'].'">
                        <br>
                                        Серия и номер паспорта: <input type="text" name="nunb"
                                                                       placeholder="Серия и номер паспорта"
                                                                       style=" width: 75%" required
                                                                       value=" ' . $row['passportID'].'"> <br>
                                        Выдан: <input type="text" name="vidn" placeholder="Выдан" style=" width: 75%"
                                                      required value="' . $row['issued'] . '"> <br>
                                        Код подразделения: <input type="text" name="code"
                                                                  placeholder="Код подразделения" style=" width: 75%"
                                                                  required value="' . $row['division_code'] . '"> <br>
                                        Дата выдачи: <input type="text" name="davi" placeholder="Дата выдачи"
                                                            style=" width: 75%" required value="' . $row['doi'] . '">
                                        <br>
                                        E-mail: <input type="email" name="mail1" placeholder="E-mail"
                                                       style=" width: 74.5%" required value="' . $row['mail'].'"> <br>
                                        Контактный телефон: <input type="text" name="telf1"
                                                                   placeholder="Контактный телефон" style=" width: 75%"
                                                                   required value="' . $row['telf'].'"><br>
'; ?>

                                        <br>
                                        <p style="text-align: center; font-size: 1.5em;">Кому доверяем?</p><br>
                                        <input type="text" name="name2" placeholder="ФИО" style=" width: 75%" required>
                                        <br>
                                        <input type="text" name="mepro2" placeholder="Место проживания"
                                               style=" width: 75%"
                                               required> <br>
                                        <br>
                                        <input type="text" name="naim" placeholder="Наименование договора"
                                               style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="sroc" placeholder="Срок доверенности"
                                               style=" width: 75%"
                                               required> <br>
                                        <input type="checkbox" name="r1" value="dov_dog" checked="checked"
                                               style=" width: 75%" required> <br>
                                        <br>

                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>

                            <?php

                        } elseif ($GLOBALS["r"] == 'dov_nasl') {
                            ?>
                            <div id="forma">
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">
                                        <p style="text-align: center; font-size: 1.5em;">Ваши данные:</p><br>
                                        <?php echo '
                                        ФИО: <input type="text" name="name" placeholder="ФИО" style=" width: 75%"
                                                    required
                                                    value="' . $row['surname'].' ' . $row['name'] . ' ' . $row['patronymic'].'">
                                        Дата рождения: <input type="text" name="data" placeholder="Дата рождения"
                                                              style=" width: 75%" required
                                                              value="' . $row['dob'] . '"><br>
                                        Место рождения: <input type="text" name="mest" placeholder="Место рождения"
                                                               style=" width: 75%" required value="' . $row['bpl'].'">
                                        <br>
                                        Место проживания: <input type="text" name="mepro" placeholder="Место проживания" style=" width: 75%" required value="' . $row['residence'].'">
                        <br>
                                        Серия и номер паспорта: <input type="text" name="nunb"
                                                                       placeholder="Серия и номер паспорта"
                                                                       style=" width: 75%" required
                                                                       value=" ' . $row['passportID'].'"> <br>
                                        Выдан: <input type="text" name="vidn" placeholder="Выдан" style=" width: 75%"
                                                      required value="' . $row['issued'] . '"> <br>
                                        Код подразделения: <input type="text" name="code"
                                                                  placeholder="Код подразделения" style=" width: 75%"
                                                                  required value="' . $row['division_code'] . '"> <br>
                                        Дата выдачи: <input type="text" name="davi" placeholder="Дата выдачи"
                                                            style=" width: 75%" required value="' . $row['doi'] . '">
                                        <br>
                                        E-mail: <input type="email" name="mail1" placeholder="E-mail"
                                                       style=" width: 74.5%" required value="' . $row['mail'].'"> <br>
                                        Контактный телефон: <input type="text" name="telf1"
                                                                   placeholder="Контактный телефон" style=" width: 75%"
                                                                   required value="' . $row['telf'].'"><br>
'; ?>

                                        <br>
                                        <p style="text-align: center; font-size: 1.5em;">Кому доверяем?</p><br>
                                        <input type="text" name="name2" placeholder="ФИО" style=" width: 75%" required>
                                        <br>
                                        <input type="text" name="mepro2" placeholder="Место проживания"
                                               style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="sroc" placeholder="Срок доверенности"
                                               style=" width: 75%"
                                               required> <br>
                                        <br>
                                        <p style="text-align: center; font-size: 1.5em;">Чье имущество?</p><br>
                                        <input type="text" name="fio3" placeholder="ФИО" style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="step" placeholder="Степень родства" style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="sost"
                                               placeholder="Составляющие наследства, через запятую" style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="adr" placeholder="Адрес местоположения наследства"
                                               style=" width: 75%"
                                               required> <br>
                                        <input type="checkbox" name="r1" value="dov_nasl" checked="checked"
                                               style=" width: 75%" required> <br>
                                        <br>

                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>

                            <?php

                        } elseif ($GLOBALS["r"] == 'dov_dom') {
                            ?>
                            <div id="forma">
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">
                                        <p style="text-align: center; font-size: 1.5em;">Ваши данные:</p><br>
                                        <?php echo '
                                        ФИО: <input type="text" name="name" placeholder="ФИО" style=" width: 75%"
                                                    required
                                                    value="' . $row['surname'].' ' . $row['name'] . ' ' . $row['patronymic'].'">
                                        Дата рождения: <input type="text" name="data" placeholder="Дата рождения"
                                                              style=" width: 75%" required
                                                              value="' . $row['dob'] . '"><br>
                                        Место рождения: <input type="text" name="mest" placeholder="Место рождения"
                                                               style=" width: 75%" required value="' . $row['bpl'].'">
                                        <br>
                                        Место проживания: <input type="text" name="mepro" placeholder="Место проживания" style=" width: 75%" required value="' . $row['residence'].'">
                        <br>
                                        Серия и номер паспорта: <input type="text" name="nunb"
                                                                       placeholder="Серия и номер паспорта"
                                                                       style=" width: 75%" required
                                                                       value=" ' . $row['passportID'].'"> <br>
                                        Выдан: <input type="text" name="vidn" placeholder="Выдан" style=" width: 75%"
                                                      required value="' . $row['issued'] . '"> <br>
                                        Код подразделения: <input type="text" name="code"
                                                                  placeholder="Код подразделения" style=" width: 75%"
                                                                  required value="' . $row['division_code'] . '"> <br>
                                        Дата выдачи: <input type="text" name="davi" placeholder="Дата выдачи"
                                                            style=" width: 75%" required value="' . $row['doi'] . '">
                                        <br>
                                        E-mail: <input type="email" name="mail1" placeholder="E-mail"
                                                       style=" width: 74.5%" required value="' . $row['mail'].'"> <br>
                                        Контактный телефон: <input type="text" name="telf1"
                                                                   placeholder="Контактный телефон" style=" width: 75%"
                                                                   required value="' . $row['telf'].'"><br>
'; ?>

                                        <br>
                                        <p style="text-align: center; font-size: 1.5em;">Кому доверяем?</p><br>
                                        <input type="text" name="name2" placeholder="ФИО" style=" width: 75%" required>
                                        <br>
                                        <input type="text" name="mepro2" placeholder="Место проживания"
                                               style=" width: 75%"
                                               required> <br>
                                        <br>
                                        <p style="text-align: center; font-size: 1.5em;"></p><br>
                                        <input type="text" name="adrdoma" placeholder="Адресс дома" style=" width: 75%"
                                               required> <br>
                                        <input type="checkbox" name="r1" value="dov_dom" checked="checked"
                                               style=" width: 75%" required> <br>
                                        <br>

                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>

                            <?php

                        } elseif ($GLOBALS["r"] == 'dov_sda') {
                            ?>
                            <div id="forma">
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">
                                        <p style="text-align: center; font-size: 1.5em;">Ваши данные:</p><br>
                                        <?php echo '
                                        ФИО: <input type="text" name="name" placeholder="ФИО" style=" width: 75%"
                                                    required
                                                    value="' . $row['surname'].' ' . $row['name'] . ' ' . $row['patronymic'].'">
                                        Дата рождения: <input type="text" name="data" placeholder="Дата рождения"
                                                              style=" width: 75%" required
                                                              value="' . $row['dob'] . '"><br>
                                        Место рождения: <input type="text" name="mest" placeholder="Место рождения"
                                                               style=" width: 75%" required value="' . $row['bpl'].'">
                                        <br>
                                        Место проживания: <input type="text" name="mepro" placeholder="Место проживания" style=" width: 75%" required value="' . $row['residence'].'">
                        <br>
                                        Серия и номер паспорта: <input type="text" name="nunb"
                                                                       placeholder="Серия и номер паспорта"
                                                                       style=" width: 75%" required
                                                                       value=" ' . $row['passportID'].'"> <br>
                                        Выдан: <input type="text" name="vidn" placeholder="Выдан" style=" width: 75%"
                                                      required value="' . $row['issued'] . '"> <br>
                                        Код подразделения: <input type="text" name="code"
                                                                  placeholder="Код подразделения" style=" width: 75%"
                                                                  required value="' . $row['division_code'] . '"> <br>
                                        Дата выдачи: <input type="text" name="davi" placeholder="Дата выдачи"
                                                            style=" width: 75%" required value="' . $row['doi'] . '">
                                        <br>
                                        E-mail: <input type="email" name="mail1" placeholder="E-mail"
                                                       style=" width: 74.5%" required value="' . $row['mail'].'"> <br>
                                        Контактный телефон: <input type="text" name="telf1"
                                                                   placeholder="Контактный телефон" style=" width: 75%"
                                                                   required value="' . $row['telf'].'"><br>
'; ?>

                                        <br>
                                        <p style="text-align: center; font-size: 1.5em;">Кому доверяем?</p><br>
                                        <input type="text" name="name2" placeholder="ФИО" style=" width: 75%" required>
                                        <br>
                                        <input type="text" name="mepro2" placeholder="Место проживания"
                                               style=" width: 75%"
                                               required> <br>
                                        <input type="text" name="sroc" placeholder="Срок доверенности"
                                               style=" width: 75%"
                                               required> <br>
                                        <br>
                                        <p style="text-align: center; font-size: 1.5em;"></p><br>
                                        <input type="text" name="adrdoma" placeholder="Адресс жилой площади"
                                               style=" width: 75%"
                                               required> <br>
                                        <input type="checkbox" name="r1" value="dov_sda" checked="checked"
                                               style=" width: 75%" required> <br>
                                        <br>

                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>

                            <?php
                        }
                    }

                    //Если форма заполенена
                } elseif (!empty($_POST['name'])) {

//            Выводим на печать соотв. договора ивыводим форму загрузки документов

                    if ($_POST['r1'] == 'zai') {

                        $GLOBALS["name"] = urldecode(htmlspecialchars($_POST['name']));
                        $GLOBALS["data"] = urldecode(htmlspecialchars($_POST['data']));
                        $GLOBALS["mest"] = urldecode(htmlspecialchars($_POST['mest']));
                        $GLOBALS["nunb"] = urldecode(htmlspecialchars($_POST['nunb']));
                        $GLOBALS["vidn"] = urldecode(htmlspecialchars($_POST['vidn']));
                        $GLOBALS["code"] = urldecode(htmlspecialchars($_POST['code']));
                        $GLOBALS["davi"] = urldecode(htmlspecialchars($_POST['davi']));
                        $GLOBALS["mail"] = urldecode(htmlspecialchars($_POST['mail1']));
                        $GLOBALS["telf"] = urldecode(htmlspecialchars($_POST['telf1']));
                        $GLOBALS["name2"] = urldecode(htmlspecialchars($_POST['name2']));
                        $GLOBALS["data2"] = urldecode(htmlspecialchars($_POST['data2']));
                        $GLOBALS["mest2"] = urldecode(htmlspecialchars($_POST['mest2']));
                        $GLOBALS["nunb2"] = urldecode(htmlspecialchars($_POST['nunb2']));
                        $GLOBALS["vidn2"] = urldecode(htmlspecialchars($_POST['vidn2']));
                        $GLOBALS["code2"] = urldecode(htmlspecialchars($_POST['code2']));
                        $GLOBALS["davi2"] = urldecode(htmlspecialchars($_POST['davi2']));
                        $GLOBALS["datee"] = urldecode(htmlspecialchars($_POST['date2']));
                        $GLOBALS["mone1"] = urldecode(htmlspecialchars($_POST['mone1']));
                        $GLOBALS["mone2"] = urldecode(htmlspecialchars($_POST['mone2']));

                        //читаем файл
                        $date = file_get_contents("file.txt");

                        $date = str_replace("fio", $GLOBALS["name"], $date);
                        $date = str_replace("datt", $GLOBALS["data"], $date);
                        $date = str_replace("mero", $GLOBALS["mest"], $date);
                        $date = str_replace("seno", $GLOBALS["nunb"], $date);
                        $date = str_replace("vida", $GLOBALS["vidn"], $date);
                        $date = str_replace("copo", $GLOBALS["code"], $date);
                        $date = str_replace("dav", $GLOBALS["davi"], $date);

                        $date2 = file_get_contents("dogovorzayma.txt");

                        $date2 = str_replace("fio1", $GLOBALS["name"], $date2);
                        $date2 = str_replace("fio2", $GLOBALS["name2"], $date2);
                        $date2 = str_replace("money1", $GLOBALS["mone1"], $date2);
                        $date2 = str_replace("money2", $GLOBALS["mone2"], $date2);
                        $date2 = str_replace("datae", $GLOBALS["datee"], $date2);
                        $date2 = str_replace("fio3", $GLOBALS["name"], $date2);
                        $date2 = str_replace("datt1", $GLOBALS["data"], $date2);
                        $date2 = str_replace("mero1", $GLOBALS["mest"], $date2);
                        $date2 = str_replace("seno1", $GLOBALS["nunb"], $date2);
                        $date2 = str_replace("vida1", $GLOBALS["vidn"], $date2);
                        $date2 = str_replace("copo1", $GLOBALS["code"], $date2);
                        $date2 = str_replace("dav1", $GLOBALS["davi"], $date2);
                        $date2 = str_replace("fio4", $GLOBALS["name2"], $date2);
                        $date2 = str_replace("datt2", $GLOBALS["data2"], $date2);
                        $date2 = str_replace("mero2", $GLOBALS["mest2"], $date2);
                        $date2 = str_replace("seno2", $GLOBALS["nunb2"], $date2);
                        $date2 = str_replace("vida2", $GLOBALS["vidn2"], $date2);
                        $date2 = str_replace("copo2", $GLOBALS["code2"], $date2);
                        $date2 = str_replace("dav2", $GLOBALS["davi2"], $date2);


                        if (true) : ?>
                            <!--Кнопка-запуск скрипта-->
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content');" title="Распечатать проект"><b>Распечатать
                                        договор на услуги нотариуса</b></a></p>
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content2');" title="Распечатать проект"><b>Распечатать
                                        договор займа</b></a></p>

                            <div id="print-content" hidden>
                                <?php echo $date; ?>
                            </div>

                            <div id="print-content2" hidden>
                                <?php echo $date2; ?>
                            </div>


                            <div id="forma">
                                <p style="text-align: center; font-size: 1.5em;">Осталось только загрузить файлы:</p>
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">

                                        <input type="file" name="pass1" multiple="" value="fdgf" required> Скан паспорта
                                        займодавца</br>
                                        <input type="file" name="pass2" multiple="" value="fdgf" required> Скан паспорта
                                        заемщика</br>
                                        <input type="file" name="dogv" required> Договор об услугах нотариуса</br>
                                        <input type="file" name="dogvz" required> Доровор займа </br>

                                        <input type="hidden" name="ysl" value="Займ">
                                        <input type="hidden" name="cen" value="<?php
                                        if ($GLOBALS["mone1"] < 1000000){
                                            $cen = $GLOBALS["mone1"] * 0.005;
                                            if ($cen < 300) $cen = 300;
                                        } elseif ($GLOBALS["mone1"] < 10000000){
                                            $cen = $GLOBALS["mone1"] * 0.003 + 5000;
                                        } else {
                                            $cen = $GLOBALS["mone1"] * 0.013 + 5000;
                                        }
                                        echo $cen; ?>">

                                        </br>
                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>


                        <?php endif;

                    }

                    if ($_POST['r1'] == 'dov_dog') {


                        $GLOBALS["name"] = urldecode(htmlspecialchars($_POST['name']));
                        $GLOBALS["data"] = urldecode(htmlspecialchars($_POST['data']));
                        $GLOBALS["mest"] = urldecode(htmlspecialchars($_POST['mest']));
                        $GLOBALS["nunb"] = urldecode(htmlspecialchars($_POST['nunb']));
                        $GLOBALS["vidn"] = urldecode(htmlspecialchars($_POST['vidn']));
                        $GLOBALS["code"] = urldecode(htmlspecialchars($_POST['code']));
                        $GLOBALS["davi"] = urldecode(htmlspecialchars($_POST['davi']));
                        $GLOBALS["mail"] = urldecode(htmlspecialchars($_POST['mail1']));
                        $GLOBALS["mepro1"] = urldecode(htmlspecialchars($_POST['mepro']));
                        $GLOBALS["telf"] = urldecode(htmlspecialchars($_POST['telf1']));
                        $GLOBALS["name2"] = urldecode(htmlspecialchars($_POST['name2']));
                        $GLOBALS["mepro2"] = urldecode(htmlspecialchars($_POST['mepro2']));

                        $GLOBALS["naim"] = urldecode(htmlspecialchars($_POST['naim']));
                        $GLOBALS["sroc"] = urldecode(htmlspecialchars($_POST['sroc']));

                        //читаем файл
                        $date = file_get_contents("file.txt");

                        $date = str_replace("fio", $GLOBALS["name"], $date);
                        $date = str_replace("datt", $GLOBALS["data"], $date);
                        $date = str_replace("mero", $GLOBALS["mest"], $date);
                        $date = str_replace("seno", $GLOBALS["nunb"], $date);
                        $date = str_replace("vida", $GLOBALS["vidn"], $date);
                        $date = str_replace("copo", $GLOBALS["code"], $date);
                        $date = str_replace("dav", $GLOBALS["davi"], $date);

                        $date2 = file_get_contents("dov_dog.txt");

                        $date2 = str_replace("fio1", $GLOBALS["name"], $date2);
                        $date2 = str_replace("mepro1", $GLOBALS["mepro1"], $date2);
                        $date2 = str_replace("fio2", $GLOBALS["name2"], $date2);
                        $date2 = str_replace("mepro2", $GLOBALS["mepro2"], $date2);
                        $date2 = str_replace("naim", $GLOBALS["naim"], $date2);
                        $date2 = str_replace("sroc", $GLOBALS["sroc"], $date2);

                        if (true) : ?>
                            <!--Кнопка-запуск скрипта-->
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content');" title="Распечатать проект"><b>Распечатать
                                        договор на услуги нотариуса</b></a></p>
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content2');" title="Распечатать проект"><b>Распечатать
                                        доверенность на заключение договора</b></a></p>

                            <div id="print-content" hidden>
                                <?php echo $date; ?>
                            </div>

                            <div id="print-content2" hidden>
                                <?php echo $date2; ?>
                            </div>


                            <div id="forma">
                                <p style="text-align: center; font-size: 1.5em;">Осталось только загрузить файлы:</p>
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">

                                        <input type="file" name="pass1" multiple="" value="fdgf" required> Скан паспорта
                                        доверителя</br>
                                        <input type="file" name="pass2" multiple="" value="fdgf" required> Скан паспорта
                                        доверительного лица</br>
                                        <input type="file" name="dogv" required> Договор об услугах нотариуса</br>
                                        <input type="file" name="dogvz" required> Доверенность на залючение
                                        договора </br>
                                        <input type="hidden" name="ysl" value="Доверенность на заключение договора">
                                        <input type="hidden" name="cen" value="1200">

                                        </br>
                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>


                        <?php endif;


                    }

                    if ($_POST['r1'] == 'dov_nasl') {

                        $GLOBALS["name"] = urldecode(htmlspecialchars($_POST['name']));
                        $GLOBALS["data"] = urldecode(htmlspecialchars($_POST['data']));
                        $GLOBALS["mest"] = urldecode(htmlspecialchars($_POST['mest']));
                        $GLOBALS["nunb"] = urldecode(htmlspecialchars($_POST['nunb']));
                        $GLOBALS["vidn"] = urldecode(htmlspecialchars($_POST['vidn']));
                        $GLOBALS["code"] = urldecode(htmlspecialchars($_POST['code']));
                        $GLOBALS["davi"] = urldecode(htmlspecialchars($_POST['davi']));
                        $GLOBALS["mail"] = urldecode(htmlspecialchars($_POST['mail1']));
                        $GLOBALS["mepro1"] = urldecode(htmlspecialchars($_POST['mepro']));
                        $GLOBALS["telf"] = urldecode(htmlspecialchars($_POST['telf1']));
                        $GLOBALS["name2"] = urldecode(htmlspecialchars($_POST['name2']));
                        $GLOBALS["mepro2"] = urldecode(htmlspecialchars($_POST['mepro2']));

                        $GLOBALS["step"] = urldecode(htmlspecialchars($_POST['step']));
                        $GLOBALS["sroc"] = urldecode(htmlspecialchars($_POST['sroc']));
                        $GLOBALS["fio3"] = urldecode(htmlspecialchars($_POST['fio3']));
                        $GLOBALS["sost"] = urldecode(htmlspecialchars($_POST['sost']));
                        $GLOBALS["$adr"] = urldecode(htmlspecialchars($_POST['$adr']));

                        //читаем файл
                        $date = file_get_contents("file.txt");

                        $date = str_replace("fio", $GLOBALS["name"], $date);
                        $date = str_replace("datt", $GLOBALS["data"], $date);
                        $date = str_replace("mero", $GLOBALS["mest"], $date);
                        $date = str_replace("seno", $GLOBALS["nunb"], $date);
                        $date = str_replace("vida", $GLOBALS["vidn"], $date);
                        $date = str_replace("copo", $GLOBALS["code"], $date);
                        $date = str_replace("dav", $GLOBALS["davi"], $date);

                        $date2 = file_get_contents("dov_nasl.txt");

                        $date2 = str_replace("fio1", $GLOBALS["name"], $date2);
                        $date2 = str_replace("mepro1", $GLOBALS["mepro1"], $date2);
                        $date2 = str_replace("fio2", $GLOBALS["name2"], $date2);
                        $date2 = str_replace("mepro2", $GLOBALS["mepro2"], $date2);
                        $date2 = str_replace("fio3", $GLOBALS["fio3"], $date2);
                        $date2 = str_replace("step", $GLOBALS["step"], $date2);
                        $date2 = str_replace("sost", $GLOBALS["sost"], $date2);
                        $date2 = str_replace("adr", $GLOBALS["adr"], $date2);

                        if (true) : ?>
                            <!--Кнопка-запуск скрипта-->
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content');" title="Распечатать проект"><b>Распечатать
                                        договор на услуги нотариуса</b></a></p>
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content2');" title="Распечатать проект"><b>Распечатать
                                        доверенность на наследство</b></a></p>

                            <div id="print-content" hidden>
                                <?php echo $date; ?>
                            </div>

                            <div id="print-content2" hidden>
                                <?php echo $date2; ?>
                            </div>


                            <div id="forma">
                                <p style="text-align: center; font-size: 1.5em;">Осталось только загрузить файлы:</p>
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">

                                        <input type="file" name="pass1" multiple="" value="fdgf" required> Скан паспорта
                                        доверителя</br>
                                        <input type="file" name="pass2" multiple="" value="fdgf" required> Скан паспорта
                                        доверительного лица</br>
                                        <input type="file" name="dogv" required> Договор об услугах нотариуса</br>
                                        <input type="file" name="dogvz" required> Доверенность </br>
                                        <input type="hidden" name="ysl" value="Доверенность на наследство">
                                        <input type="hidden" name="cen" value="5000">

                                        </br>
                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>


                        <?php endif;


                    }

                    if ($_POST['r1'] == 'dov_dom') {


                        $GLOBALS["name"] = urldecode(htmlspecialchars($_POST['name']));
                        $GLOBALS["data"] = urldecode(htmlspecialchars($_POST['data']));
                        $GLOBALS["mest"] = urldecode(htmlspecialchars($_POST['mest']));
                        $GLOBALS["nunb"] = urldecode(htmlspecialchars($_POST['nunb']));
                        $GLOBALS["vidn"] = urldecode(htmlspecialchars($_POST['vidn']));
                        $GLOBALS["code"] = urldecode(htmlspecialchars($_POST['code']));
                        $GLOBALS["davi"] = urldecode(htmlspecialchars($_POST['davi']));
                        $GLOBALS["mail"] = urldecode(htmlspecialchars($_POST['mail1']));
                        $GLOBALS["mepro1"] = urldecode(htmlspecialchars($_POST['mepro']));
                        $GLOBALS["telf"] = urldecode(htmlspecialchars($_POST['telf1']));
                        $GLOBALS["name2"] = urldecode(htmlspecialchars($_POST['name2']));
                        $GLOBALS["mepro2"] = urldecode(htmlspecialchars($_POST['mepro2']));

                        $GLOBALS["adrdoma"] = urldecode(htmlspecialchars($_POST['adrdoma']));

                        //читаем файл
                        $date = file_get_contents("file.txt");

                        $date = str_replace("fio", $GLOBALS["name"], $date);
                        $date = str_replace("datt", $GLOBALS["data"], $date);
                        $date = str_replace("mero", $GLOBALS["mest"], $date);
                        $date = str_replace("seno", $GLOBALS["nunb"], $date);
                        $date = str_replace("vida", $GLOBALS["vidn"], $date);
                        $date = str_replace("copo", $GLOBALS["code"], $date);
                        $date = str_replace("dav", $GLOBALS["davi"], $date);

                        $date2 = file_get_contents("dov_dom.txt");

                        $date2 = str_replace("fio1", $GLOBALS["name"], $date2);
                        $date2 = str_replace("mepro1", $GLOBALS["mepro1"], $date2);
                        $date2 = str_replace("fio2", $GLOBALS["name2"], $date2);
                        $date2 = str_replace("mepro2", $GLOBALS["mepro2"], $date2);
                        $date2 = str_replace("adrdoma", $GLOBALS["adrdoma"], $date2);


                        if (true) : ?>
                            <!--Кнопка-запуск скрипта-->
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content');" title="Распечатать проект"><b>Распечатать
                                        договор на услуги нотариуса</b></a></p>
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content2');" title="Распечатать проект"><b>Распечатать
                                        доверенность продажу жилого дома</b></a></p>

                            <div id="print-content" hidden>
                                <?php echo $date; ?>
                            </div>

                            <div id="print-content2" hidden>
                                <?php echo $date2; ?>
                            </div>


                            <div id="forma">
                                <p style="text-align: center; font-size: 1.5em;">Осталось только загрузить файлы:</p>
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">

                                        <input type="file" name="pass1" multiple="" value="fdgf" required> Скан паспорта
                                        доверителя</br>
                                        <input type="file" name="pass2" multiple="" value="fdgf" required> Скан паспорта
                                        доверительного лица</br>
                                        <input type="file" name="dogv" required> Договор об услугах нотариуса</br>
                                        <input type="file" name="dogvz" required> Доверенность </br>
                                        <input type="hidden" name="ysl" value="Доверенность на продажу жилого дома">
                                        <input type="hidden" name="cen" value="1200">
                                        </br>
                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>


                        <?php endif;

                    }

                    if ($_POST['r1'] == 'dov_sda') {


                        $GLOBALS["name"] = urldecode(htmlspecialchars($_POST['name']));
                        $GLOBALS["data"] = urldecode(htmlspecialchars($_POST['data']));
                        $GLOBALS["mest"] = urldecode(htmlspecialchars($_POST['mest']));
                        $GLOBALS["nunb"] = urldecode(htmlspecialchars($_POST['nunb']));
                        $GLOBALS["vidn"] = urldecode(htmlspecialchars($_POST['vidn']));
                        $GLOBALS["code"] = urldecode(htmlspecialchars($_POST['code']));
                        $GLOBALS["davi"] = urldecode(htmlspecialchars($_POST['davi']));
                        $GLOBALS["mail"] = urldecode(htmlspecialchars($_POST['mail1']));
                        $GLOBALS["mepro1"] = urldecode(htmlspecialchars($_POST['mepro']));
                        $GLOBALS["telf"] = urldecode(htmlspecialchars($_POST['telf1']));
                        $GLOBALS["name2"] = urldecode(htmlspecialchars($_POST['name2']));
                        $GLOBALS["mepro2"] = urldecode(htmlspecialchars($_POST['mepro2']));

                        $GLOBALS["adrdoma"] = urldecode(htmlspecialchars($_POST['adrdoma']));
                        $GLOBALS["sroc"] = urldecode(htmlspecialchars($_POST['sroc']));

                        //читаем файл
                        $date = file_get_contents("file.txt");

                        $date = str_replace("fio", $GLOBALS["name"], $date);
                        $date = str_replace("datt", $GLOBALS["data"], $date);
                        $date = str_replace("mero", $GLOBALS["mest"], $date);
                        $date = str_replace("seno", $GLOBALS["nunb"], $date);
                        $date = str_replace("vida", $GLOBALS["vidn"], $date);
                        $date = str_replace("copo", $GLOBALS["code"], $date);
                        $date = str_replace("dav", $GLOBALS["davi"], $date);

                        $date2 = file_get_contents("dov_zda.txt");

                        $date2 = str_replace("fio1", $GLOBALS["name"], $date2);
                        $date2 = str_replace("mepro1", $GLOBALS["mepro1"], $date2);
                        $date2 = str_replace("fio2", $GLOBALS["name2"], $date2);
                        $date2 = str_replace("mepro2", $GLOBALS["mepro2"], $date2);
                        $date2 = str_replace("adrdoma", $GLOBALS["adrdoma"], $date2);
                        $date2 = str_replace("sroc", $GLOBALS["sroc"], $date2);


                        if (true) : ?>
                            <!--Кнопка-запуск скрипта-->
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content');" title="Распечатать проект"><b>Распечатать
                                        договор на услуги нотариуса</b></a></p>
                            <p style="text-align: center; cursor: pointer; font-size: 1.5em; color: red;"><a
                                        onClick="javascript:CallPrint('print-content2');" title="Распечатать проект"><b>Распечатать
                                        доверенность продажу жилого дома</b></a></p>

                            <div id="print-content" hidden>
                                <?php echo $date; ?>
                            </div>

                            <div id="print-content2" hidden>
                                <?php echo $date2; ?>
                            </div>


                            <div id="forma">
                                <p style="text-align: center; font-size: 1.5em;">Осталось только загрузить файлы:</p>
                                <div id="forms" style="margin-left: 20%; ">
                                    <form action="../php/dog.php" method="post">

                                        <input type="file" name="pass1" multiple="" value="fdgf" required> Скан паспорта
                                        доверителя</br>
                                        <input type="file" name="pass2" multiple="" value="fdgf" required> Скан паспорта
                                        доверительного лица</br>
                                        <input type="file" name="dogv" required> Договор об услугах нотариуса</br>
                                        <input type="file" name="dogvz" required> Доверенность </br>

                                        <input type="hidden" name="ysl" value="Доверенность на сдачу жилой площади">
                                        <input type="hidden" name="cen" value="1800">

                                        </br>
                                        <input type="submit" value="Отправить">

                                    </form>
                                </div>
                            </div>


                        <?php endif;

                    }

                } elseif (!empty($_POST['pass1'])) {
                    $ysl = $_POST['ysl'];
                    $cen = $_POST['cen'];
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];
                    $dogv = $_POST['dogv'];
                    $dogvz = $_POST['dogvz'];

                    $sql = "INSERT INTO `services`(`user_id`, `services`, `price`, `passport_1`, `passport_2`, `treaty_1`, `treaty_2`) VALUES 
('$id','$ysl','$cen','$pass1','$pass2','$dogv','$dogvz')";

                    if (mysqli_query($link, $sql)) {

                        $sql =  "SELECT MAX(`id`) FROM `services`";
                        $result = mysqli_query($link, $sql);
                        $row = mysqli_fetch_array($result);
                        $id1 = $row[0];

                $sql = "SELECT * FROM users WHERE id='$id'";
                $result = mysqli_query($link, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $mail = $row['mail'];
                        $name = $row['name'];

                        $textmess = "Здравствуйте, " . $name . "! \n 
                            Сообщаем вам, что ваша заявка №" . $id1 . " на услугу " . $ysl . " принята. \n 
                            Сумма услуги, согласно вашим требованиям составляет " . $cen . "руб.  \n 
                            Просим вас явится по адресу г. Ульяновск, ул. Радищева, д. 8 " . date(d+1 . '.' . m) . " в 13:00 для завершения сделки \n 
                            Реквизиты для онлайн-оплаты: \n
                            ИНН 578532148325 \n
                            Р/с 40265321462593145623 \n
                            К/с 43258953217654231592, БИК 0477359 \n
                            ";
                        $resmess = mail($mail, "Ваша заявка №" . $id1, $textmess);

                        if($resmess){
                            echo '<center> <p> Мы получили ваш запрос! <br> Письмо уже отправлено вам на почту, код вашей заявки: ' . $id1 .'</p></center>';
                        } else {
                            echo '<center> Что-то пошло не так :`( <br> Почтовая служба временно недоступна. Приносим свои извинения за неудобство! </center>';
                        }
                    }}
                    } else {
                        echo 'Ошибка1<br/>';
                        die();
                    }
                } else {
                //            Вывод формы если нет запросов

                if (true): ?>

                <!--Форма отправки(ДОРАБОТАТЬ!)-->
                <div id="forma">
                    <p style="text-align: center; font-size: 1.5em;">Выберете услугу</p>
                    <center>
                        <a href="dog.php?r=dov_dog">Доверенность на заключение договора</a><br/>
                        <a href="dog.php?r=dov_nasl">Доверенность на наследство</a><br/>
                        <a href="dog.php?r=dov_dom">Доверенность на продажу жилого дома</a><br/>
                        <a href="dog.php?r=dov_sda">Доверенность на сдачу жилой площади</a><br/>
                        <a href="dog.php?r=zai">Займ</a><br/>
                    </center>
                </div>
            </div>

            <?php endif;

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
<?php
include "script.php";
/* проверяем, инициализированы ли переменные */
if(isset($_POST['r']) && isset($_POST['x']) && isset($_POST['y'])) {
    $start_time = microtime(true);
    /* заводим переменную, отвечающую за попадание точки в область */
    $in_area = isHit();
}
    ?>

<! DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>first_try</title>
        <style>
            /* здесь будет код на css */
            .basic {
                background-color: rgb(30, 30, 30);
                text-align: center;
            }
            /* внешний вид шапки, см ТЗ */
            /* пример селектора класса -- может присваиваться любому кол-ву элементов */
            .head {
                text-align: center;
                background-color: rgb(30, 30, 30);
                color: rosybrown;
                font-family: Cursive;
                font-size: 24px;
            }
            /* пример селектора идентификатора -- может присваиваться только 1 элементу */
            #clock {
                color: antiquewhite;
                font-size: 24px;
                font-weight: bold;
            }

            .interface-block {
                /* задаем границу*/
                border-color: antiquewhite;
                border-radius: 20px;
                /* внешний отступ на всех 4 сторонах элемента */
                margin: auto;
                /* внутренние отступы от границ элемента до его содержимого */
                padding: 5px;
            }
            .centering {
                text-align: center;
                margin: auto;
            }
            .fillingLocation {
                width: 100%;
                height: 100%;
            }

            #requestAnswer {
                text-align: center;
                width: 100%;
                height: 90%;
            }
            .requestAnswerTableBlockLeft {
                text-align: right;
                padding-right: 10%;
                width: 50%;
            }
            .requestAnswerTableBlockRight {
                text-align: left;
                padding-left: 10%;
                width: 50%;
            }
            .answer {

            }

        </style>
    </head>
    <body class="head">
    <header>
        <h1>Нечаева Анна Анатольевна, R3238, #1418</h1>
    </header>

    <!-- здесь начинается форма, метод HTTP "POST" -->
    <form method="post">
        <!-- дальше рисуем табличку -->
        <table>
            <!-- рисуем строчку -->
            <tr>
                <!-- рисуем столбец == заполняем ячейку-->
                <td>
                    <div id="clock" >00:00:00</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="interface-block">
                        <img src="area.png" alt = "Проблемы с загрузкой картинки :(">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <?php if (isset($in_area)) { ?>
                    <div class="interface-block" style="border-color: antiquewhite">
                        <table class="centering fillingLocation">
                            <tr>
                                <td>
                                    <div>
                                        Результат:
                                    </div>
                                </td>
                            </tr>
                            <td>
                                <td>
                                <?php
                                /* выводит выражения */
                                echo "<table id='requestAnswer' class='centering'>";
                                echo "<tr><td class='requestAnswerTableBlockLeft'>r:</td><td class='requestAnswerTableBlockRight'>
<span class='answer' id='r'>" .$_POST['r'] . "</span>
</td></tr>";
                                echo "<tr><td class='requestAnswerTableBlockLeft'>x:</td><td class='requestAnswerTableBlockRight'>
<span class='answer' id='x'>" .$_POST['x'] . "</span></td></tr>";
                                echo "<tr><td class='requestAnswerTableBlockLeft'>y:</td><td class='requestAnswerTableBlockRight'>
<span class='answer' id='y'>" .$_POST['y'] . "</span></td></tr>";
                                if($in_area == "true") {
                                    echo "<tr><td class='requestAnswerTableBlockLeft'>Попала:</td><td class='requestAnswerTableBlockRight'>
<span class='answer' id='In_area'>" . "Да" . "</span></td></tr>";
                                } else {
                                    echo "<tr><td class='requestAnswerTableBlockLeft'>Попала:</td><td class='requestAnswerTableBlockRight'>
<span class='answer' id='In_area'>" . "Нет" . "</span></td></tr>";
                                }
                                $stop_time = microtime(true);
                                echo "<tr><td class='requestAnswerTableBlockLeft'>Время работы:</td>
<td class='requestAnswerTableBlockRight'><span class='answer' id='PhpWorkingtime'>" . ($stop_time - $start_time) . " мкс" . "</span></td></tr>";
                                echo "</table>";
                                ?>
                            </td>
                            </tr>
                        </table>
                    </div>
        <?php } ?>
                </td>
            </tr>
        <tr>
            <td>
                <div class="interface-block">
                    <table class="fillingLocation">
                        <tr>
                            <td>
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <!-- здесь я остановилась -->
                                            <span id=""
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        </table>
    </form>
    </body>
</html>

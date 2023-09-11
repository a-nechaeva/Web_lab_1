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
                margin: auto;
                /* 
                padding: 5px;
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

                </td>
            </tr>
        </table>
    </form>
    </body>
</html>

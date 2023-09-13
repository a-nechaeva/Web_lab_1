<?php
include "script.php";
/* проверяем, инициализированы ли переменные */
if(isset($_POST['R']) && isset($_POST['X']) && isset($_POST['Y'])) {
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
            .centering {

            }
            .basic {
                background-color: rgb(30, 30, 30);
                text-align: center;
            }
            /* внешний вид шапки, см ТЗ */
            /* пример селектора класса -- может присваиваться любому кол-ву элементов */
            .head {
                text-align: center;
                background-color: rgb(30, 30, 30);
                color: aquamarine;
                font-family: Cursive;
                font-size: 20px;
            }
            /* пример селектора идентификатора -- может присваиваться только 1 элементу */
            #clock {
                color: aqua;
                font-size: 40px;
                font-weight: bold;
            }

            .interface-block {
                /* задаем границу*/
                border-color: aquamarine;
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
            #rPadding {
                text-align: left;
                padding-left: 117px;
            }
            /* кто такой этот ваш ховер */
            #rPadding:hover {
                text-align: left;
                padding-left: 113px;
            }
            #xPadding {
                text-align: left;
                padding-left: 30px;
            }
            #xPadding:hover {
                text-align: left;
                padding-left: 26px;
            }
            #yPadding {
                text-align: left;
                padding-left: 130px;
            }
            #yPadding:hover {
                text-align: left;
                padding-left: 126px;
            }
            .clickedElement {
                color: aqua;
                background: darkgray;
            }
            .clickedElement:hover {
                color: aqua;
                cursor: pointer;
                padding: 4px;
            }

            .selectedClickedElement {
                color: aliceblue;
            }
            .selectedClickedElement:hover {
                cursor: pointer;
                padding: 4px;
                color: blue;
            }
            #yTextField {
                color: blue;
                font-weight: bold;
                text-align: center;
            }
            .selectingAreas {
                border: 1px solid;
                border-color: blue;
                border-radius: 3px;
                background-color: darkgray;
            }
            .selectingAreas:hover {
                cursor: pointer;
                border-color: aqua;
            }
            #submitDiv {
                border: 1px solid;
                border-color: bisque;
                border-radius: 15px;
                margin: 10px;
                padding: 5px;
            }
            #submitDiv:hover {
                border-color: pink;
            }
            #submitButton {
                background: aliceblue;
                border: 0px solid;
            }
            #exceptionField {
                font-weight: normal;
                color: aquamarine;
            }
            .savedRequestTableBorder {
                border: 1px solid;
                border-color: blue;
            }

        </style>
    </head>
    <body class="basic" style="color: aqua">
    <header class="head">
        <h1>Нечаева Анна Анатольевна, R3238, #1418</h1>
    </header>
<main id="main" class="invisible">
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
                                            <span id="rTitle">Параметр r</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="rPadding">
                                            <span class="clickedElement">
                                                <input class="rRadio" type="radio" name="r" tabindex="1"
                                                placeholder="Параметр r"
                                                value="1">
                                                <span>1</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="rRadio" type="radio" name="r" tabindex="1"
                                                       placeholder="Параметр r"
                                                       value="2">
                                                <span>2</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="rRadio" type="radio" name="r" tabindex="1"
                                                       placeholder="Параметр r"
                                                       value="3">
                                                <span>3</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="rRadio" type="radio" name="r" tabindex="1"
                                                       placeholder="Параметр r"
                                                       value="4">
                                                <span>4</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="rRadio" type="radio" name="r" tabindex="1"
                                                       placeholder="Параметр r"
                                                       value="5">
                                                <span>5</span>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <span id="xTitle">Параметр x</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="xPadding">
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                placeholder="Параметр x"
                                                value="-4">
                                                <span>-4</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                       placeholder="Параметр x"
                                                       value="-3">
                                                <span>-3</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                       placeholder="Параметр x"
                                                       value="-2">
                                                <span>-2</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                       placeholder="Параметр x"
                                                       value="-1">
                                                <span>-1</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                       placeholder="Параметр x"
                                                       value="0">
                                                <span>0</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                       placeholder="Параметр x"
                                                       value="1">
                                                <span>1</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                       placeholder="Параметр x"
                                                       value="2">
                                                <span>2</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                       placeholder="Параметр x"
                                                       value="3">
                                                <span>3</span>
                                            </span>
                                            <span class="clickedElement">
                                                <input class="xCheckbox" type="checkbox" name="x" tabindex="2"
                                                       placeholder="Параметр x"
                                                       value="4">
                                                <span>4</span>
                                            </span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="fillingLocation">
                                    <tr>
                                        <td>
                                            <span id="yTitle">Параметр y</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="yPadding">
                                            <input id="yTextField" class="selectingAreas" type="text" name="y"
                                            tabindex="3"
                                            placeholder="(-5;3)">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="submitDiv" class="">
                    <button id="submitButton" class="fillingLocation" type="submit">
                        <table class="fillingLocation">
                            <tr>
                                <td>
                                    <span id="exceptionField"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="basic" style="font-size: x-large">Проверить точку</span>
                                </td>
                            </tr>
                        </table>
                    </button>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <br><br><br>
            </td>
        </tr>
        <?php
        if (isset($_POST['savedRequests'])) {
            echo "<tr><td><span>Предыдущие результаты:</span></td>";
            echo "<tr><td>";
            echo "<table id='savedRequestTable' class='centering fillingLocation savedRequestTableBorder'>";
            echo "<tr><td class='savedRequestTableBorder'>x</td><td class='savedRequestTableBorder'>y</td><td class='savedRequestTableBorder'>r</td>
<td class='savedRequestTableBorder'>Попала</td><td class='savedRequestTableBorder'>Время выполнения</td></tr>";

            $savedRequests = $_POST['savedRequests'];
            $savedRequests = explode(";", $savedRequests);
            for ($i = 0; $i < count($savedRequests); $i++) {
                $parameters = explode(",", $savedRequests[$i]);
                echo "<tr class='request'>";
                for ($j = 0; $j < count($parameters); $j++) {
                    echo "<td class='parameter saved RequestsTableBorder'>$parameters[$j]</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "</tr></td>";
        }
        ?>

        </table>
    </form>
    </main>
   <!-- <script src="src/checker.js"></script> -->
    <script src="src/checker.js"></script>
    </body>
</html>

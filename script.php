<?php
function isHit() {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $r = $_POST['r'];

    $hit = false;
    if (-$r / 2 <= $x && $x <= 0 && $y >= 0 && $y <= $r)
        $hit = true;

    if ($x >= 0 && $y <= 0 && $y >= ($r / 2 - 1 / 2))
        $hit = true;

    if ($x <= 0 && $y <= 0 && (pow($x, 2) + pow($y, 2)) <= pow($r, 2))
        $hit = true;

    return $hit;


}

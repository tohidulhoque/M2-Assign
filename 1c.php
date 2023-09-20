<?php
function evenNum() {
    $i = 1;
    if ($i % 2 != 0)

    do {
        echo $i + 1 . ' ';
        $i += 2;

    } while ($i <= 20);
}

evenNum();
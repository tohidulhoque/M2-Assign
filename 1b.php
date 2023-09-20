<?php

function evenNum() {
    $i = 1;
    while ($i <= 20) {
        if ($i % 2 != 0) {
            echo $i + 1 . " ";
        }
        $i += 2;
    }
}


evenNum();

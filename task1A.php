<?php
function evenNum() {
    for ($i = 1; $i <= 20; $i += 2) {
        if ($i % 2 != 0) {
            echo $i + 1 . ' ';
        }
    }
}

evenNum();
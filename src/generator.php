<?php

function numbersGenerator($limit = 10)
{
    for($i = 1; $i <= $limit; $i++) {
        yield pow(2 , $i) - 1;
    }
}
foreach(numbersGenerator() as $num) {
    echo $num . ' ';
}
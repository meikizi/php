<?php

$people = [
    ['Taro', 25, 'man'],
    ['Jiro', 20, 'man'],
    ['hanako', 16, 'woman'],
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . $person[2] . ')';
    echo '<br />';
}
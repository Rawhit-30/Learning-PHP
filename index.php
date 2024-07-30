<?php
echo "<h1>welcome , day 1 of learning php </h1>";

$a = 20;
$b = 30;
$c = 10;

if ($a > $b) {
    if ($a > $c) {
        echo "<p> a is greatest </p>";
    }
} else {
    if ($b > $c) {
        echo "<p> b is greatest </p>";
    } else {
        echo "<p>C is greatest</p>";
    }
}

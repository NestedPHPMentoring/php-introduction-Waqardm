<?php

// task 001

echo nl2br('I went down to the river,
I set down on the bank.
I tried to think but couldn\'t,
So I jumped in and sank.

I came up once and hollered!
I came up twice and cried!
If that water hadn\'t a-been so cold
I might\'ve sunk and died.');

// task 002
echo('<br>');
$firstName = "Waqar";
$age = "32";
$height = "1.88";

print_r($firstName . $age . $height);

echo('<br>');

var_dump($firstName);
var_dump($age);
var_dump($height);

$ageInteger = (int)$age;
$heightDouble = (double)$height;

print_r($ageInteger . '&' . $heightDouble);echo('<br>');
var_dump($ageInteger);echo('<br>');
var_dump($heightDouble);echo('<br>');


//task 003

for ($i=0; $i++;) {
        $line = readline(["" . ","]);
        readline_add_history($line);
        print_r(array_count_values($line));
}

//task 004

for ($i=0; $i++;) {
        $line = readline(["" . ","]);
        readline_add_history($line);
        print_r(array_reverse($line));
}































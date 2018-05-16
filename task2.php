<?php

echo "TASK 2";

echo "<p>";

$N = 5;
$N_factorial = 1;

for ($i = 1; $i <= $N-1; $i++) {
    $N_factorial*=($i+1);
}

echo $N_factorial;

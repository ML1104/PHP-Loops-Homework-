<?php

echo "TASK 1";

echo "<p>";

$N = 5;
$N_start = 1;
$N_sum = 0;

for ($i = $N_start; $i <= $N; $i++) {
    $N_sum += $i;
}

echo $N_sum;
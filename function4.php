<?php
function factorial(int $number): int {
    if ($number < 0) {
        throw new InvalidArgumentException('Number must be non-negative.');
    }
    if ($number === 0) {
        return 1;
    }
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}







?>
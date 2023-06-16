<?php
function multiplyArrays(array $array1, array $array2): array {
    $result = array();
    $count = min(count($array1), count($array2));
    for ($i = 0; $i < $count; $i++) {
        $result[] = $array1[$i] * $array2[$i];
    }
    return $result;
}
 ?>
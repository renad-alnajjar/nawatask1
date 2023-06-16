<?php


function remove_odd_numbers($numbers) {
  $result = array();
  foreach ($numbers as $number) {
    if ($number % 2 == 0) {
      $result[] = $number . '<br>';
    }
  }
  return $result;
}
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$even_numbers = remove_odd_numbers($numbers);
print_r($even_numbers) . '<br>';


?>
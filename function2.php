<?php
function find_longest_string($strings) {
  $longest_string = '';
  foreach ($strings as $string) {
    if (strlen($string) > strlen($longest_string)) {
      $longest_string = $string;
    }
  }
  return $longest_string;
}
$strings = array('ali', 'abood', 'mahmoud', 'mohammed');
$longest_string = find_longest_string($strings);
echo "The longest string is: $longest_string\n";

?>
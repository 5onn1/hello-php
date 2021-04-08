<?php

# $data: The string to process.
# $replacement: The replacement.
# $visible_digits: Number of digits to be visible, in this case the lasts.

function hide_digits($data, $replacement, $visible_digits) {
  //return substr_replace($mobile, '*', 0, $data_length-4);
  $data_length = strlen($data);
  $rplc = $replacement;
  for ($i = 1; $i <= ($data_length-$visible_digits)-1; $i++) {
    $rplc = $rplc . $replacement;
  }

  return substr_replace($data, $rplc, 0, $data_length-$visible_digits);
}
 echo hide_digits("123456789", "*", 4);
# This prints: *****6789
?>

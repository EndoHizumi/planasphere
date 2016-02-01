<?php
function prints($value){
  $shaping = "<pre>$value</pre>\n";
  echo $shaping;
}

function print_rs($value){
  print("<pre>");
  print_r($value);
  print("</pre>\n");
}

 ?>

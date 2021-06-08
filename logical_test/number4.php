<?php 
for($i = 1; $i<=50; $i++) {
    if ($i % 3 != 0 && $i % 5 != 0) {
      echo $i.' - ';
      continue;
    }
    if ($i % 3 == 0) {
        echo 'Foo';
        echo ' - ';
    }
    if ($i % 5 == 0){

        echo 'Bar';
        echo ' - ';
    } 
  }
?>
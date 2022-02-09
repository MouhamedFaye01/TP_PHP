<?php

require "fonction.php";
define("VAL_MAX",100);
define("VAL_MIN",1);
    $A= rand(VAL_MIN,VAL_MAX);
    $B= rand(VAL_MIN,VAL_MAX);
    echo "******************Avant la permutation*****************<br>";
    echo $A, " et ", $B."<br>";
    
    echo "******************Après la permutation*****************<br>";

    permutation_nombre($A,$B);
  

?>
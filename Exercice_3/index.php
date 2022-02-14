<?php
    include_once "fonction.php";
define("VAL_MAX",100);
define("VAL_MIN",1);
    $A= rand(VAL_MIN,VAL_MAX);
    $B= rand(VAL_MIN,VAL_MAX);

    echo $A, " et ", $B."<br>";


    $somme=Somme_nombre($A,$B);
    echo " La somme est ".$somme."<br>";

    $diff=difference_nombre($A,$B);
    echo " La difference est ".$diff."<br>";

    $produit=produit_nombre($A,$B);
    echo " Le produit est ".$produit."<br>";

    $division=division_nombre($A,$B);
    echo " La division est ".$division."<br>";

    $modulo=modulo_nombre($A,$B);
    echo " Le modulo est ". $modulo."<br>";

    $carre=carre_nombre($A);
    echo " Le carré de A est ".$carre."<br>";

    $expo=exponentiel_nombre($A);
    echo " L'exponentiel de A est ".$expo."<br>";


?>
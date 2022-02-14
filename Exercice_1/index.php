<?php
include_once ("fonction.php");

    $cote = rand(0 , 10);
    echo $cote."<br>";

    $per=perimetre_carre($cote);
    echo " Le périmètre est ".$per."<br>";

    $surf=surface_carre($cote);
    echo " La surface est ".$surf."<br>";

    $diag=diagonale_carre($cote);
    echo " Le diagonale est ".$diag."<br>";


?>
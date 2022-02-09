<?php
require"fonction.php";
$x1=rand(1,100);
$x2=rand(1,100);
$y1=rand(1,100);
$y2=rand(1,100);

echo " Les coordonnées de A sont: ".$x1." et ".$x2."<br>";
echo " Les coordonnées de A sont: ".$y1." et ".$y2."<br>";
$dist = distance_points($x1,$x2,$y1,$y2);
echo"La distance est ".$dist."<br>";


?>
<?php
 function liste_nombre(int $N)
 {
     for ($i=1;$i<$N+1;$i++){
         echo"<ul>";
         echo"<li>";
         echo $i;
         echo"</li>";
         echo"</ul>";
     }
 }
function saisie_nombre(int $N){
    if (isset($_POST["btnok"])) {
        if (empty($_POST["N"] )) {
            header("location:index.html.php");
        }
        else {
        if (is_numeric($_POST["N"])) {
            liste_nombre($N);
        }else {
            header("location:index.php");
        }
        }
    }
}





?>
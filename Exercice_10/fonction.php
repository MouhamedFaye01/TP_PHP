<?php
function input_nombre(int $N){
    for ($i=1;$i<=$N;$i++){
       echo "<input type=text >"."<br>";
    }
}
function saisie_nombre($N){
    if (isset($_POST["btnok"])){

        if (empty($_POST["N"] )) {
            header("location:index.html.php");
        }
        else {

            if (is_numeric($_POST["N"])) {
            input_nombre($N);
            }
            else {
            header("location:index.php");
                 }
        }
    }
}


?>
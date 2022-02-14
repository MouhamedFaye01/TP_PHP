<?php
function multiplication_nombre(int $N){
    for ($i=1;$i<$N+1;$i++){
       echo $N*$i."<br>";

    }
}
// function saisie_nombre(int $N){
//     if (isset($_POST["btnok"])) {
//         if (empty($_POST["N"] )) {
//             header("location:index.html.php");
//         }
//         else {
//         if (is_numeric($_POST["N"])) {
//             multiplication_nombre($N);
//         }else {
//             header("location:index.php");
//         }
//         }
//     }
// }
function valid_nombre($nbre,string $key, array &$error):void{
    if(empty ($nbre)){
        $error[$key]= "Veuillez saisir une valeur";

    }
    else{
        if (!is_numeric($nbre)){
            $error[$key] ="Veuillez saisir un nombre";
        }
    }   
}
?>

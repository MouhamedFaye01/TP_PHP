<?php
 
include_once("fonction.php");

if(isset($_POST['btn_ok']) ){
    $j=$_POST['jour'];
    $m=$_POST['mois'];
    $A=$_POST['Annee'];

    $table_error=[];
    valid_nombre($j,"j",$table_error);
    valid_nombre($m,"m",$table_error);
    valid_nombre($A,"A",$table_error);

    if(count($table_error)==0 && date_valide($j,$m,$A)){
        date_suivante($j,$m,$A);

    }else{
        header("location:index.php");
        exit();
    }


}else{
    header("location:index.php");
    exit();
}


?>
<?php

include_once("fonction.php");

if(isset($_POST['btn_ok'])){
    $N=$_POST['N'];
  

    $table_error=[];
    saisie_nombre($N,"N",$table_error);
   

    if(count($table_error)==0){
        liste_nombre( $N);

    }else{
        header("location:index.html.php");
        exit();
    }


}else{
    header("location:index.html.php");
    exit();

}
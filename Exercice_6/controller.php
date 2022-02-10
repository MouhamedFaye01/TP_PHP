<?php

include("fonction.php");

if(isset($_POST['btn_ok'])){
    $a=$_POST['nbrA'];
    $b=$_POST['nbrB'];
    $c=$_POST['nbrC'];

    $table_error=[];
    valid_nombre($a,"A",$table_error);
    valid_nombre($b,"B",$table_error);
    valid_nombre($c,"C",$table_error);

    if(count($table_error)==0){
        equation_second($a,$b,$c);

    }else{
        header("location:index.html.php");
        exit();
    }


}else{
    header("location:index.html.php");
    exit();

}


?>
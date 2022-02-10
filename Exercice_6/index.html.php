<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form  method = "post" > 
    <?php
include_once("fonction.php");
    
    ?>

<div class="tableau">
    <label for="a">Nombre A</label>
    <br>
    <input type="text" id="a" name="nbrA" placeholder="Veuillez saisir une valeur">  
    <br>

    <label for="b">Nombre B</label>
    <br>
    <input type="text" id="b" name="nbrB" placeholder="Veuillez saisir une valeur">
    <br>

    <label for="c">Nombre C</label>
    <br>
    <input type="text" id="c" name="nbrC"  placeholder="Veuillez saisir une valeur"> 
    <br>
<br>
    <input type="submit" name="btn_ok"  value = "Calculer">
    
</div>
</form>

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

</body>
</html>
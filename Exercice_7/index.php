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

<form action="controller.php" method = "post" > 
    <?php
include_once("fonction.php");
    
    ?>

<div class="tableau">
    <label for="j">Jour</label>
    <br>
    <input type="text" id="j" name="jour" placeholder="Veuillez saisir une valeur">  
    <br>
    <label for="m">Mois</label>
    <br>
    <input type="text" id="m" name="mois" placeholder="Veuillez saisir une valeur">  
    <br>
    <label for="A">Année</label>
    <br>
    <input type="text" id="A" name="Annee" placeholder="Veuillez saisir une valeur">  
    <br>

    

   
<br>
    <input type="submit" name="btn_ok"  value = "Calculer">
    
</div>
</form>


</body>
</html>
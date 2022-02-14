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


</body>
</html>
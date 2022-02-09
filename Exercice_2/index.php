  <?php
    require("fonction.php");

    $longueur = rand(1,20);
    $largeur = rand(1,$longueur);
    echo $longueur."<br>".$largeur."<br>";


    $per=perimetre_rectangle($longueur,$largeur);
    echo " Le périmètre est ".$per."<br>";

    $surf=surface_rectangle($longueur,$largeur);
    echo " La surface est ".$surf."<br>";

    $diag=diagonale_rectangle($longueur,$largeur);
    echo " Le diagonale est ".$diag."<br>";


?>

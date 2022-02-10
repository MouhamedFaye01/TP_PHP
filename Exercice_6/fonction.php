<?php

function equation_premier($A,$B):void{
    if($A==0){
        if($B==0){
        echo"L'équation admet une infinté de solutions";
        }
        else{
        echo"L'équation n'a pas de solutions";
        }
    }
    else{
        $X=-$B/$A;
        echo"La solution de l'équation est X=: .$X";
    }
}
function equation_second(float $A,float $B, float $C):void{
    if($A==0 && $B==0 && $C==0){
        echo " L'équtation admet une infinté de solutions";
    }else{
        if ($A==0) {
            echo "L'équation est une équation du premier degré";
            equation_premier($B,$C);
        }else{
            $delta=$B**2-4*$A*$C ;            
            if($delta>0) {
                $x1=(-$B-sqrt($delta))/(2*$A);
                echo "x1=".$x1."<br>";

                $x2=(-$B+sqrt($delta))/(2*$A);
                echo "x2=".$x2."<br>";
            }else{
                if($delta<0){
                    echo"L'équation n'a pas de solutions";

                }else{
                    $x0=-$B/2*$A;
                    echo "x0=".$x0."<br>";
                }
            }
        }
    }

}
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
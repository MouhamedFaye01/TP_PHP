<?php
    function perimetre_rectangle(int $longueur,int $largeur){
             return ($longueur+$largeur)*2;
        }
    function surface_rectangle(int $longueur,int $largeur){
            return $longueur*$largeur;
    }
    function diagonale_rectangle(int $longueur,int $largeur){
        return round(sqrt($longueur**2 + $largeur**2),3);
    }
?>
<?php
    function annee_bissextile(int $A):bool {
        if(($A%4==0 && $A%100!=0) || ($A%400==0)){
            return true;
        }
        return false;
    }
    function nbre_jours(int $m,int $A ):int{
        
        if($m<1 ||$m>12 ||$A<0){
            $number_days=-1 ;
        }else{
            if ($m==2) {
                if (annee_bissextile($A)==true){
                    $number_days=29;
                }else {
                    $number_days=28;
                }            
            }else{
                if($m==4 ||$m==6 ||$m==9 || $m==11){
                    $number_days=30;
                }
                else{
                    $number_days=31;
                }
            }
            return $number_days;
        } 
    }
    function date_valide(int $j,int $m,int $A):bool{
        if($j>=1 && $j<= nbre_jours($m,$A)){
            return true;
            
        }
        return false;
            

    }
    function date_suivante(int $j,int $m,int $A):void{
        
        if(date_valide($j,$m,$A)){
           if($j>=1 && $j<nbre_jours($m,$A)){
               echo $j+1,"/",$m,"/",$A,'<br>';
           }
            else{
                if ( $j=nbre_jours($m,$A) && $m!=12){
                    echo 1,"/",$m+1,"/",$A,'<br>';
                }
                else{
                    if($j=nbre_jours($m,$A) && $m=12){
                        echo 1,"/",1,"/",$A+1,'<br>';
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

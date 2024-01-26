<?php
    function createPassword($lunghezza){
        
        $maiuscole = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        $minuscole = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $numeri = ["0","1","2","3","4","5","6","7","8","9"];
        $simboli = ["!","£","$","%","&","/","(","=",")","?","@"];
        $caratteri_totali = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9","!","£","$","%","&","/","(","=",")","?","@"];

        // creo una variabile password, inizialmente vuota, 
        $password = "";
        // aggiungo alla variabile $password una chiave di ogni array così si è certi che la password finale contenga almeno una lettera maiscola una minuscola un numero e un simbolo
        $password .= $maiuscole[array_rand($maiuscole, 1)];
        $password .= $minuscole[array_rand($minuscole, 1)];
        $password .= $numeri[array_rand($numeri, 1)];
        $password .= $simboli[array_rand($simboli, 1)];

        
        
        $array_password = array_rand($caratteri_totali, ($lunghezza - 4));
        
        
        foreach ($array_password as $indice){
            $password.= $caratteri_totali[$indice];
        }
        $password = str_shuffle($password);
        return $password;
    }
    




?>
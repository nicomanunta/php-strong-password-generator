<?php
    if(isset($_GET["number"]) && $_GET["number"] != ""){
        $lunghezza_psw = $_GET["number"];
        

        function createPassword($lunghezza){
            $maiuscole = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
            $minuscole = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
            $numeri = ["0","1","2","3","4","5","6","7","8","9"];
            $simboli = ["!","£","$","%","&","/","(","=",")","?","@"];
            $caratteri_completi = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9","!","£","$","%","&","/","(","=",")","?","@"]

            // creo una variabile password, inizialmente vuota, 
            $password = "";
            // aggiungo alla variabile $password una chiave di ogni array così si è certi che la password finale contenga almeno una lettera maiscola una minuscola un numero e un simbolo
            $password .= $maiuscole[array_rand($maiuscole, 1)];
            $password .= $minuscole[array_rand($minuscole, 1)];
            $password .= $numeri[array_rand($numeri, 1)];
            $password .= $simboli[array_rand($simboli, 1)];

            
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="./index.php" method="GET">
                    <div class="row">
                        <div class="col-4">
                            <input type="number" class="form-control" id="number" name="number" placeholder="Inserire lunghezza password">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-success">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    include __DIR__."/partials/functions.php";

    if(isset($_GET["number"]) && $_GET["number"] != ""){
        $lunghezza = $_GET["number"];

        $password_generata = createPassword($lunghezza);
        echo  $password_generata;
        
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
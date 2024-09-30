<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    for ( $i = 0 ; $i < count($hotels); $i++){
        ?>
            <ul>
                    <li>
                        Name: <?php echo $hotels[$i]["name"] ?>
                    </li>
                    <li>
                        Description: <?php echo $hotels[$i]["description"] ?>
                    </li>
                    <li>
                        Parking: 
                        <?php 
                            if ( $hotels[$i]["parking"] == true) {
                                echo 'Si';
                            }
                            else{
                                echo 'No';
                            }
                        ?>
                    </li>
                    <li>
                        Vote: <?php echo $hotels[$i]["vote"] ?>
                    </li>
                    <li>
                        Distance_to_center: <?php echo $hotels[$i]["distance_to_center"] ?>
                    </li>
            </ul>
            <hr>
       <?php
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP HOTEL</title>
        <!-- link css -->
         <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <main>
            <div>
             
            </div>
        </main>
        
    </body>
</html>

<!-- 
Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
 -->
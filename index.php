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
        /*  oppure invece di usare isset si può utiizzare la array_key_exists
            if (
                array_key-exists('parking', $_GET) === true 
                &&
                $_GET['parking'] !== null
            )
        */
        ?>
           
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP HOTEL</title>
        <!-- link Bootstrap -->
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
      
    </head>
    <body>
    <div class="container">
        <header>
            <h3>
                PHP HOTEL 
            </h3>
            <div>
            <form  method="GET">

                <div class="mb-2">
                    <label class="d-block">
                        Parcheggio ?
                    </label>

                    <div class="form-check">
                        <input 
                            class="form-check-input"
                            type="checkbox" 
                            value="1" 
                            id="parking-yes" 
                            name="parking"
                            <?php echo (isset($_GET['parking']) && $_GET['parking'] == 1 ? 'checked' : ''); ?> >
                            <!-- invece di usare il checked abbiamo usato due condizioni -->
                        <label class="form-check-label" for="
                        parking-yes">
                            Si
                        </label>
                    </div>

                </div>

                <div class="mb-3 w-25">
                    <label for="vote" class="form-label">Voto (>=)</label>
                    <input
                        type="number" 
                        class="form-control" 
                        id="vote" 
                        min="1"
                        max="5"
                        name="vote"
                        placeholder="<?php echo (isset($_GET['vote']) ? $_GET['vote'] : ''); ?>"
                         >
                           <!-- value="<?php echo (isset($_GET['vote']) ? $_GET['vote'] : ''); ?> " /*  -->
                        
                </div>

                <div>
                     <button class="btn btn-primary" type="submit">
                        Invia
                    </button>
                </div>
                    
               
                    
            </form>
            </div>
        </header>
        <main>
            <div>
                <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //  for ( $i = 0 ; $i < count($hotels); $i++) {
                                foreach ( $hotels as $ind => $hotel) {
                                    $showHotel = true;

                                    // isset($var) controlla se la variabile passata come argomento esiste ( quindi è stata definita) e ha un valore diverso da null . Restituisce true/false

                                        if ( 
                                            isset($_GET['parking']) // controllo se c'è un filtraggio per parcheggio attivo ( cioè controllo se nella query string c'è parking)
                                             && 
                                             $_GET['parking'] == 1  // controllo se il valore del filtro è 1 
                                             && 
                                             $hotel["parking"] == false // controllo se l'hotel NON ha il parcheggio 
                                        ) {
                                            $showHotel = false;
                                        }

                                        if ( 
                                            isset($_GET['vote']) 
                                             && 
                                             is_numeric($_GET['vote'])   // controlla se il valore di vote è un numero
                                             && 
                                             $hotel["vote"]  < $_GET['vote'] 
                                        ) {
                                            $showHotel = false;
                                        }




                                        if ($showHotel){
                                             ?>
                                        <tr>
                                            <th scope="row"><?php echo $ind + 1; ?> </th>
                                            <td><?php echo $hotel["name"]; ?></td>
                                            <td><?php echo $hotel["description"]; ?></td>
                                            <td><?php echo ($hotel["parking"] == true ?  'Si' : 'No'); ?> </td>
                                            <td><?php echo $hotel["vote"]; ?></td>
                                            <td><?php echo $hotel["distance_to_center"]; ?></td>
                                        </tr>
                                        <?php
                                        }
                                   
                        
                                    }
                                ?>
                        </tbody>
                </table>
            </div>
        </main>
    </div>
       
               
    </body>
</html>


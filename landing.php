<?php

/*
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.

*/


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

    $sceltaParcheggio = $_GET['scelta'];
    $scetaPerVoto = $_GET['voto'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>


<table class="table">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">descrizione</th>
      <th scope="col">voto</th>
      <th scope="col">parking</th>
      <th scope="col">distance_to_center</th>
    </tr>
  </thead>
  <tbody>
      <?php
    if($sceltaParcheggio == 'si'){
        foreach($hotels as $elem){
            if(in_array($elem['parking'], $hotels) && in_array($elem['vote'] >= $scetaPerVoto , $hotels)){
                echo "<tr>" 
                .  "<td>" . $elem['name'] . "</td>" 
                .  "<td>" . $elem['description'] . "</td>" 
                .  "<td>" . $elem['vote'] . "</td>" 
                .  "<td>" . (($elem['parking'] == 0) ? 'no' : 'si'). "</td>" 
                .  "<td>" . $elem['distance_to_center'] . "</td>" .
                
                "</tr>";
            };
           
    
        };
    }elseif($sceltaParcheggio == 'no'){
        foreach($hotels as $elem){
            if(in_array($elem['parking'] == false, $hotels) && in_array($elem['vote'] >= $scetaPerVoto , $hotels)){
                echo "<tr>" 
                .  "<td>" . $elem['name'] . "</td>" 
                .  "<td>" . $elem['description'] . "</td>" 
                .  "<td>" . $elem['vote'] . "</td>" 
                .  "<td>" . (($elem['parking'] == 0) ? 'no' : 'si'). "</td>" 
                .  "<td>" . $elem['distance_to_center'] . "</td>" .
                
                "</tr>";
            };
    
        };
    }elseif($scetaPerVoto){
        foreach($hotels as $elem){
            if(in_array($elem['vote'] >= $scetaPerVoto , $hotels)){
                echo "<tr>" 
                .  "<td>" . $elem['name'] . "</td>" 
                .  "<td>" . $elem['description'] . "</td>" 
                .  "<td>" . $elem['vote'] . "</td>" 
                .  "<td>" . (($elem['parking'] == 0) ? 'no' : 'si'). "</td>" 
                .  "<td>" . $elem['distance_to_center'] . "</td>" .
                
                "</tr>";
            };
    
        };
    }else{
        foreach($hotels as $elem){
                echo "<tr>" 
                .  "<td>" . $elem['name'] . "</td>" 
                .  "<td>" . $elem['description'] . "</td>" 
                .  "<td>" . $elem['vote'] . "</td>" 
                .  "<td>" . (($elem['parking'] == 0) ? 'no' : 'si'). "</td>" 
                .  "<td>" . $elem['distance_to_center'] . "</td>" .
                
                "</tr>";
            };
    
        
    }
    

    ?>
      
    
  </tbody>
</table>


</body>
</html>
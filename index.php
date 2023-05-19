
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

    $sceltaParcheggio = $_GET['scelta'];

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
    

<!-- <div>
    <?php
    
    foreach($hotels as $elem){
        echo "<div>" . $elem['name'] . "</div>";
        echo "<div>" . $elem['description'] . "</div>";
        echo "<div>" . "vote: " .  $elem['vote'] . "</div>";
        echo "<div>" . "numero di parcheggi: " .  $elem['parking'] . "</div>";
        echo "<div>" . "distance to center: " .  $elem['distance_to_center'] . "</div>";

    }
    
    ?>
</div> -->



<form action="index.php" method="get">

<label for="">parcheggio</label>
<select name="scelta" id="" >
    <option></option>
    <option>si</option>
    <option>no</option>
</select>
<button type="submit">Cerca</button>

</form>

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
            if(in_array($elem['parking'], $hotels)){
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
            if(in_array($elem['parking'], $hotels)){
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
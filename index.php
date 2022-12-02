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
    //logica non funzionante
    if('parking' == true){
      $hotel['parking'] = 'SI';
    }else{
      $hotel['parking'] = 'NO';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>Alberghini</title>
</head>
<body>
<div class="container">
  <h2>ALBERGHINI</h2>
  <p>stampare gli alberghi del tag PHP in tabella</p>            
  <table class="table table-striped">
    <thead>
      <tr>
      <th class="col-2">Nome</th>
      <th class="col-2">Descrizione</th>
      <th class="col-2">Parcheggio</th>
      <th class="col-2">Stelle</th>
      <th class="col-2">Distanza dal centro in km</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach($hotels as $hotel){
        echo '<tr>';
        echo '<td>' . $hotel['name'] . '</td>';
        echo '<td>' . $hotel['description'] . '</td>';
        echo '<td>' . ($hotel['parking'] ? 'Si' : 'No') . '</td>';
        echo '<td>' . $hotel['vote'] . '</td>';
        echo '<td>' . $hotel['distance_to_center'] . '</td>';
        echo '</tr>';
      }

      ?>
    </tbody>
  </table>
</div>

</body>
</html>
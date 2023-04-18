<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotels</title>

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
</head>
<body>

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

  $parcheggio = $_GET["parcheggio"] ?? "";


  ?>
  <div class="container">
    
    <h1 style="padding-top: 50px">Hotels</h1>
  
    <form action="index.php" method="GET">
      <span>Hai bisogno di un parcheggio?</span>
      <input name="parcheggio" type="checkbox">
      
      <br><br>

      <span>Filtra per voto da 1 a 5:</span>
      <input name="voto" type="number" placeholder="Inserisci il voto">

      <br><br>

      <button type="submit">Filtra</button>
    </form>
  
    <br>
    <hr>
  
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Parcheggio</th>
          <th scope="col">Voto</th>
          <th scope="col">Distanza dal centro</th>
        </tr>
      </thead>
      <tbody>
      <?php
        foreach ($hotels as $hotel) {
      ?>
        <tr>

        <!-- <?php 
        if($parcheggio != "" && $hotel["parking"] == "Si") 
        ?> -->
        
          <td>
              <?php echo $hotel["name"] ?>
          </td>
          <td>
              <?php echo $hotel["description"] ?>
          </td>
          <td>
              <?php echo $hotel["parking"] ? "Si" : "No" ?>
          </td>
          <td>
              <?php echo $hotel["vote"] ?> / 5
          </td>
          <td>
              <?php echo $hotel["distance_to_center"] ?> km
          </td>
        </tr>
      <?php
        }
      ?>
      </tbody>
    </table>

  </div>



   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<html>
  <head>
    <title>PHP Test TMDB API</title>
  </head>
  <body>

    <?php
    //// conexión con las API
    $data = json_decode( file_get_contents('https://api.themoviedb.org/3/person/190?api_key=45082c7b0f792bc71f372fbce1b42c61&language=es'), true );


    // variable obtenidas con los datos
    $nombre = $data['name'];
    $biografia = $data['biography'];
    $fotop = $data['profile_path']; 
    ?>

    <h3><?php echo $nombre; ?></h3>
    <p><?php echo $biografia; ?> </p>

    <img src="https://image.tmdb.org/t/p/w185/<?php echo $fotop; ?>" alt="Foto de <?php echo $nombre;?>" />    
  </body>
</html>
<?php

    require './db_connection.php';
    $conn = OpenCon('testdb');

    $sql_getNextMovieId = 'SELECT MAX(id) as maxAantal FROM Movie';
    $resMovieId = $conn->query($sql_getNextMovieId);

    if($resNextMovieId >0){
        $row = $resMovieId->fetch_assoc();
        $nextMovieId = $row['maxAantal'];
    } else{die;}

    


?>
<?php
    require './db_connection.php';
    $conn = OpenCon('Fletnix_2');

    $sql = 'SELECT COUNT(id) as amountMovies FROM Movies';
    $res = $conn->query($sql);

    while($row = $res->fetch_assoc()){
        for($i = 1; $i <= $row['amountMovies'] ;$i++){
            $movieArray[$i] = $i;
        }
        shuffle($movieArray);
    }

    echo '<br><br>';
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
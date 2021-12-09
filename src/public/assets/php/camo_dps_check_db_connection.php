<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/camo_dps_main.css">
    <script src="/assets/js/fontAwsome.js" crossorigin="anonymous"></script>
    <title>Camo-DPS</title>
</head>
<body>
<?php
    require './db_connection.php';

    if (openCon("mysql")->connect_error) {
    die('<div class="info-container">
            <h1>Database connection has Failed</h1>
            <br>
            <a href="/">Go back</a>
        </div>
        <div class=pre-icon>
            <div class="icon">
                <i class="fas fa-bug"></i>
            </div>
        </div>');
    } 
    echo '<div class="info-container">
                <h1>Database connection is succesfull</h1>
                <br>
                <a href="/">Go back</a>
            </div>
            <div class=pre-icon>
                <div class="icon">
                    <i class="fas fa-check"></i>
                </div>
            </div>';
    ?>
</body>
</html>
<?php

    $movieTitel = $_POST['titel'];
    $movieOmschrijving = $_POST['description'];
    $movieGenre = $_POST['gerne'];
    
    require './db_connection.php';
    $conn = OpenCon('testdb');
    echo 'connected';

    $sql_getNextMovieId = 'SELECT MAX(id) as maxAantal FROM Movie';
    $resMovieId = $conn->query($sql_getNextMovieId);

    if($resMovieId >0){
        $row = $resMovieId->fetch_assoc();
        $nextMovieId = $row['maxAantal']+1;
        echo $nextMovieId;
    } else {echo 'error';}

    $movieId = (int)$nextMovieId;
    $target_dir = "../../assets/img/db/$movieId/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            mkdir('../../assets/img/db/'.$movieId);
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    $fileDir = $target_dir.$movieId.'.'.$imageFileType;

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fileDir)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }


    $movieImgDir = "/assets/img/db/$movieId/$movieId.$imageFileType";
    $sqlInsertData = "INSERT INTO Movie
    VALUES ($movieId,'$movieTitel','$movieOmschrijving','$movieGenre','$movieImgDir')";
    if ($conn->query($sqlInsertData) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sqlInsertData . "<br>" . $conn->error;
      }
    echo '<br>';
    echo $movieId .'<br>'. $movieTitel .'<br>'. $movieOmschrijving .'<br>'. $movieGenre .'<br>'. $movieImgDir;

    $resSqlInsertData = $conn->query($sqlInsertData);

?>

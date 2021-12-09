<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        width: 100%;
        background-color: red;
    }
    .item{
        display: inline-block;
        background-color: blue;
        color: white;
        border-radius: 5px;
        border: none;
        width: 400px;
        margin: 10px 10px;
        padding: 10px;
    }
    img{
        width: 100px;
        height: 100px;
    }
</style>
<body>
    <a href="upload.html">Upload</a>
    <?php
        require './assets/php/db_connection.php';
        $conn = OpenCon("testdb");

        $sql = "SELECT name, desciption, imgDir FROM Movie";  
        $result = $conn->query($sql);

        if ($result > 0) {
            echo '<div class="container">';
                    while($row = $result->fetch_assoc()) {  
                        if(empty($row['desciption'])){
                            $row['desciption'] = 'N.V.T.';
                        } 
                        echo '<div class="item">
                                <h1>'.$row["name"].'</h1>
                                <p>'.$row["desciption"] .'</p>
                                <p>'. $row['imgDir'].'</p>
                                <img src="'.$row['imgDir'].'" alt="Not found" title="Damn enge database">
                                </div>';
                    }  
            echo  '</div>';
           
        } else {
            echo "0 results";
        }  
    ?>
</body>
</html>
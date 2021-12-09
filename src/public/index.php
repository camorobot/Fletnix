<!DOCTYPE html>
<?php
    // Verbinden met de datbase
    require_once './assets/php/db_connection.php';
    require_once './assets/php/inc/functions.php';
    $conn = OpenCon('Fletnix_2');
    //Krijg alle films + info
    $sqlInfo = "SELECT * FROM Movies ORDER BY rand()";  
    $resInfo = $conn->query($sqlInfo);
    $i = getDatabaseEntertainment('Movie');
    echo $i['id'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Css/reset.css">
	<link rel="stylesheet" href="Assets/Css/main.css">
    <link rel="stylesheet" href="Assets/Css/style_home.css">
    <script src="https://kit.fontawesome.com/ad2967b452.js" crossorigin="anonymous"></script>
    <title>Fletnix</title>
</head>
<body>
    <div class="header-preview"></div>
        <nav>  
            <ul>
                <li><a href="/"><img src="/Assets/Img/LOGO.png" alt="netflix-font" class="header-logo"></a></li>
                <li><a href="/"  class="nav-active">Homepagina</a></li>
                <li><a href="/Assets/Pages/Series">Series</a></li>
                <li><a href="/Assets/Pages/Films">Films</a></li>
                <li><a href="/Assets/Pages/Top10">Onze top 10</a></li>
                <li><a href="/">Mijn lijst</a></li>
            </ul>
            <ul class="navbarRight">
                <li><a href="/Assets/Pages/Zoeken">Zoeken<i class="fas fa-search search"></i></a></li>
                <li><a href="/">Meldingen<i class="far fa-bell"></i></a></li>
                <li><a href="/Assets/Pages/Login">Username<i class="far fa-user"></i></a></li>
                <li><a href="/Assets/php/camo_dps_restore_database.php">Restore<i class="fas fa-database"></i></a></li>
            </ul>
        </nav>
        <div class="preview">
            <img src="/Assets/Img/STELLAR.png" alt="stellar" title="stellar">
            <br>
            <p>De mensheid staat op het punt om uit te sterven. Een groep astronauten reist door een worm gat op zoek naar een andere bewoonbare planeet.</p>
            <button><i class="fas fa-play"></i>Afspelen</button>
            <button class="button-alt"><i class="fas fa-info"></i>Informatie</button>
        </div>
        <section class="ShowMovieObject">
            <h1>Misschien vind je dit leuk</h1>
            <ul class="ShowMovieObjectContainer">
                <?php
                    if ($resInfo > 0) {
                        while($row = $resInfo->fetch_assoc()){
                            echo '<li class="item"><a href="/Assets/Pages/Film/index.php?MovieTitle='.$row['Title'].'&PlayingTime='.$row['PlayingTime'].'&PublicationDate='.$row['PublicationDate'].'&Author='.$row['AuthorId'].'&Cast='.$row['Cast'].'&Description='.$row['Description'].'"><img src="'.$row['PreviewImg'].'" title="'.$row['Title'].'" alt="'.$row['Title'].'"><div class="ShowMovieObjectInfo"><p>'.$row['Title'].'</p></div></a></li>';
                        }
                    } else { echo 'No results'; }
                ?>
            </ul>
            <h1>Series</h1>
            <ul class="ShowMovieObjectContainer">
                <?php
                    $sql = "SELECT *FROM Movies WHERE Entertainment = 'Serie' ORDER BY rand()";  
                    $result = $conn->query($sql);
                    if ($result > 0) {
                        while($row = $result->fetch_assoc()){
                            echo '<li class="item"><a href="/Assets/Pages/Film/index.php?MovieTitle='.$row['Title'].'&PlayingTime='.$row['PlayingTime'].'&PublicationDate='.$row['PublicationDate'].'&Author='.$row['AuthorId'].'&Cast='.$row['Cast'].'&Description='.$row['Description'].'"><img src="'.$row['PreviewImg'].'" title="'.$row['Title'].'" alt="'.$row['Title'].'"><div class="ShowMovieObjectInfo"><p>'.$row['Title'].'</p></div></a></li>';
                        }
                    } else { echo 'No results'; }
                ?>
            </ul>
            <h1>Films</h1>
            <!-- ALLE FILMS OP EEN RIJTE-->
            <ul class="ShowMovieObjectContainer">
                <?php
                    // creer funcite om data ophalen van film en serie
                    $sql = "SELECT * FROM Movies WHERE Entertainment = 'Film' ORDER BY rand()";  
                    $result = $conn->query($sql);
                    if ($result > 0) {
                        while($row = $result->fetch_assoc()){
                            echo '<li class="item"><a href="/Assets/Pages/Film/"><img src="'.$row['PreviewImg'].'" title="'.$row['Title'].'" alt="'.$row['Title'].'"><div class="ShowMovieObjectInfo"><p>'.$row['Title'].'</p></div></a></li>';
                        }
                    }
                ?>
            </ul>
            <h1>Familie</h1>
            <!-- NOG MEER FAMILIE FILMS OP EEN RIJTJE-->
            <?php
                getDatabaseEntertainment('Film');
            ?>
            <ul class="ShowMovieObjectContainer">
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel ?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
                <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            </ul>
        <!-- ALLE FILMS OP EEN RIJTE-->
        <h1>Actie films</h1>
        <ul class="ShowMovieObjectContainer">
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Lucifer</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Squid Games</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel ?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
        </ul>
        <h1>Horror</h1>
        <!-- NOG MEER FAMILIE FILMS OP EEN RIJTJE-->
        <ul class="ShowMovieObjectContainer">
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Homeland</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Lucifer</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Squid Games</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel ?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
        </ul>
        <h1>Populair op Fletnix</h1>
        <!-- NOG MEER FAMILIE FILMS OP EEN RIJTJE-->
        <ul class="ShowMovieObjectContainer">
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Homeland</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Lucifer</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Squid Games</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel ?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
        </ul>
        <h1>Nieuw deze week</h1>
        <!-- NOG MEER FAMILIE FILMS OP EEN RIJTJE-->
        <ul class="ShowMovieObjectContainer">
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Homeland</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Lucifer</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Squid Games</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel ?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
        </ul>
        <h1>Documentaties</h1>
        <!-- NOG MEER FAMILIE FILMS OP EEN RIJTJE-->
        <ul class="ShowMovieObjectContainer">
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Homeland</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Lucifer</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p>Squid Games</p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel ?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABXe-ucm7shVVRN9ySRXck0sDgTyjaAdqRdOaYpyme_qhoW9Ln9lLTatRdynij4w2lUR58SB-ojjjQNqM1VJVWTzfNPc.jpg?r=292" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYDtGaLSLXLcc5WwR5cyJle0bzquSNRiYQItLhxvRQ0Zt93UNHfacrFDa7F8xD0tCsxwsoPebH9GP9J_dchQuSZTihE52zjIPAZ5dDkI5ICzQ7mdHazNP-g1yrf9.jpg?r=31e" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABVxGfyTsGvDw6MfKaQdW2knAa27VxTkZf1wpZIVLCHv6qaT5cwBtrhuihleW5c80rMENfZotx-F37uijVeO2a8XbULjB56J_SdReQPLRpBhEzGq7LznZpuNoqzZRoLLH6Sbr1qBKdvlUqq7LmQAb85VUBaQnz2COMOon320m2kga1mTURPfzAlM.jpg?r=f9b" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABYzXTqzYjgwqZCzMGs8S5HzLgGOiPK6Eil0q3Y5bLmrJvrUqI1AWVRaNgcd3QCa005d7Id7WMuYfCkvvUMISVn8lvMw.jpg?r=d79" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABa12XPFvDdKnf0nCl_0QXW_ONbvL0bcIMsVL7nLWq2P_0rjiOr9HbjADimY_65tnyzVFJDbsWhYCGuX15VPW4HErfHjx0a9GvtHR4VpehCOh50eiFGPMPjXFDVHR.jpg?r=c70" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABfH7SAuyyupgCeT2BuemhZx5DGk0y5oH_J_dykBJ13CxAJuYX_YsVpOomaOCNbZWFmceeCxCWgoRyJWKOeET6HURePsnhGgNghAGDyzw5z6kYz2bqi2izl4mic1M.jpg?r=b31" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
            <li class="item"><a href="/Assets/Pages/Film/"><img src="/Assets/Img/AAAABWx0Pre-Bv4DxClXMOSQ7T2Pz3rLnlLXyqunScGliaECAdxPJKQkjfzOaULNzU58P1aKtkdJg-Vx_NE3a8-bFWAvfVoMqjH1iUBQkwtCPEb10vkt3KB-hfFJXfXo.jpg?r=f2b" title="Goudvis_IMG" alt="IU_GoudVis_IMG"><div class="ShowMovieObjectInfo"><p><?php echo $filmTitel?></p></div></a></li>
        </ul>
    </section>
    <footer>
        <div class="socialmedia">
            <ul>
                <li><a href="https://instagram.com"><i class="fab fa-instagram-square"></i></a></li>
                <li><a href="https://facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a></li>
                <li><a href="https://youtube.com"><i class="fab fa-youtube-square"></i></a></li>
            </ul>
        </div>
        <ul>
            <li><a href="/Assets/Pages/Privacy">Audio en ondertiteling</a></li>
            <li><a href="/Assets/Pages/Privacy">Media center</a></li>
            <li><a href="/Assets/Pages/Privacy">Privacy</a></li>
            <li><a href="/Assets/Pages/Privacy">Contect opnemen</a></li>
        </ul>
        <ul>
            <li><a href="/Assets/Pages/Sitemap">Sitemap</a></li>
            <li><a href="/Assets/Pages/Privacy">Audiodiscriptie</a></li>
            <li><a href="/Assets/Pages/Privacy">Relatie met inversteerders</a></li>
            <li><a href="/Assets/Pages/Privacy">Wettelijke gegevens</a></li>
        </ul>
        <ul>
            <li><a href="/Assets/Pages/Over-Ons">Helpcentrum</a></li>
            <li><a href="/Assets/Pages/Over-Ons">Vacatures</a></li>
            <li><a href="/Assets/Pages/Over-Ons">Cookievoorkeuren</a></li>
        </ul>
        <ul>
            <li><a href="/Assets/Pages/Over-Ons">Cadeaubonnen</a></li>
            <li><a href="/Assets/Pages/Over-Ons">Gebruikersvoorwaarden</a></li>
            <li><a href="/Assets/Pages/Over-Ons">Over Ons</a></li>
        </ul>
        <p class="copyright">COPYRIGHT 2000 - <?php echo date("Y"); ?></p>
    </footer>
</html>
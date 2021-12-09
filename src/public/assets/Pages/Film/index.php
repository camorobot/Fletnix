<!DOCTYPE html>
<?php
    require '../../php/db_connection.php';
    $conn = OpenCon('Fletnix_2');

    $MovieTitle = $_GET['MovieTitle'];
    $PlayingTime = $_GET['PlayingTime'];
    $PublicationDate = $_GET['PublicationDate'];
    $Author = $_GET['AuthorId'];
    $Cast = $_GET['Cast'];
    $Description = $_GET['Description'];


    $sql = 'SELECT Movies.AuthorId, Authors.Firstname
    FROM Movies
    INNER JOIN Authors ON Movies.AuthorId = Authors.id;';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assets/Css/reset.css">
    <link rel="stylesheet" href="/Assets/Css/main.css">
    <link rel="stylesheet" href="/Assets/css/film.css">
    <script src="https://kit.fontawesome.com/ad2967b452.js" crossorigin="anonymous"></script>
    <title>Fletnix - <?php echo $MovieTitle?></title>
</head>
<body>
    <nav>  
        <ul>
            <li><a href="/"><img src="/Assets/Img/LOGO.png" alt="netflix-font" class="header-logo"></a></li>
            <li><a href="/">Homepagina</a></li>
            <li><a href="/Assets/Pages/Series">Series</a></li>
            <li><a href="/Assets/Pages/Films">Films</a></li>
            <li><a href="/Assets/Pages/Top10">Onze top 10</a></li>
            <li><a href="/">Mijn lijst</a></li>
        </ul>
        <ul class="navbarRight">
            <li><a href="/Assets/Pages/Zoeken">Zoeken<i class="fas fa-search search"></i></a></li>
            <li><a href="/">Meldingen<i class="far fa-bell"></i></a></li>
            <li><a href="/Assets/Pages/Login">Username<i class="far fa-user"></i></a></li>
        </ul>
    </nav>
    <section>
        <div class="header-preview"></div>
        <div class="film-info">
            <!-- Titel, jaar, regiseur, hoofdrolspeler, duur, samenvatting. -->
            <button><i class="fas fa-play"></i>Afspelen</button>
            <div class="border-info title-info">
                <?php echo '<h1>'.$MovieTitle.'<h1>';?>
            </div>
            <div class="border-info film-details-info">
                <p>Duur: <?php echo $PlayingTime; ?> minuten</p>
                <p>PublicatieJaar: <?php echo $PublicationDate ?></p>
                <p>Regiseur: <?php echo $Author ?></p>
                <p>Hoofdrolspeler: <?php echo $Cast ?></p>
            </div>
            <div class="border-info samenvatting-info">
                <p><?php echo $Description?></p>
            </div>
        </div>
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
        <p class="copyright">COPYRIGHT 2000 - </p>
    </footer>
</body>
</html>
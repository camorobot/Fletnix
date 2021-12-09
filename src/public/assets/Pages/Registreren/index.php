<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Assets/Css/reset.css">
    <link rel="stylesheet" href="/Assets/Css/main.css">
    <link rel="stylesheet" href="/Assets/Css/forms.css">
    <link rel="stylesheet" href="/Assets/Css/login.css">
    <script src="https://kit.fontawesome.com/ad2967b452.js" crossorigin="anonymous"></script>
    <title>Fletnix - Registreren</title>
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
        <form action="/Assets/php/registreren.php" method="POST">
            <div class="form-wrapper">
                <div class="form-image">
                    <img src="/Assets/Img/LOGO.png" ALT="LOGO" title="LOGO">
                </div>
                <div class="form-container">
                    <div class="input-container">
                        <label for="login-form-voornaam">Voornaam</label>
                        <input placeholder="Janne" id="login-form-voornaam" name="voornaam" type="text">
                    </div>
                    <div class="input-container">
                        <label for="login-form-achternaam">Achternaam</label>
                        <input placeholder="Clauws" id="login-form-achternaam" name="achternaam" type="text">
                    </div>
                    <div class="input-container">
                        <label for="login-form-land">Land</label>
                        <input placeholder="Netherlands" id="login-form-land" name="land" type="text">
                    </div>
                    <div class="input-container">
                        <label for="login-form-geboorte">Geboortejaar</label>
                        <input id="login-form-geboorte" name="Geboortejaar" type="date">
                    </div>
                    <div class="input-container">
                        <label for="login-form-rekening">Rekening nummer</label>
                        <input placeholder="4745034523456554" id="login-form-rekening" name="rekening" type="number">
                    </div>
                    <div class="input-container">
                        <label for="login-form-password">Wachtwoord</label>
                        <input placeholder="YourPasswordHere@?" id="login-form-password" name="password" type="password">
                    </div>
                    <div class="input-container">
                        <label for="login-form-password-repeat">Wachtwoord Herhalen</label>
                        <input placeholder="YourPasswordHere@?" id="login-form-password-repeat" name="password-repeat" type="password">
                    </div>
                    <div class="input-container">
                        <label for="login-form-abbonoment">Abbonoment</label>
                        <select id="login-form-abbonoment" name="abbonoment">
                            <option value="Basic">Basic - €3,99 p/m</option>
                            <option value="Platinum">Platinum - €5,99 p/m</option>
                            <option value="Max">Max - €7,99 p/m</option>
                        </select>
                    </div>
                    <button type="submit">Registreren</button>
                </div>
                <div class="link-container">
                    <a href="/Assets/Pages/Login">Inloggen</a>  
                </div>   
            </div>
        </form>
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
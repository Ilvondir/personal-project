<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio</title>
        <link rel="shortcut icon" href="img/logo.png">
        <link rel="stylesheet" href="css/style.css">
        <meta name="robots" content="noindex">
        <script src="js/form.js" defer></script>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <a href="index.html"><img src="img/logo.png" alt="Logo."></a>
                <ul>
                    <li><a href="index.html">Strona główna</a></li>
                    <li><a href="aboutMe.html">O mnie</a></li>
                    <li><a href="contact.html">Kontakt</a></li>
                </ul>
            </div>
            <div class="content">
                <h1>Skontaktuj się ze mną!</h1>
                <form action="">
                    <input type="text" name="name" placeholder="Podaj swoje imię"><br>
                    <input type="email" name="email" placeholder="Podaj swój adres email"><br>
                    <textarea name="content" placeholder="Podaj treść wiadomości"></textarea><br>
                    </form>
                    <button onclick="send()">Wyślij email</button>
            </div>
        </div>
    </body>
</html>
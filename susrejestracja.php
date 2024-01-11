<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="amongus.css">
</head>
<body>
    <header>
        <h1>Portal Wędkarski</h1>
    </header>
    <section class="lista">
        <ul>
            <li>
                <a href="suslogowanie.php">
                    Logowanie
                </a>
            </li>
            <li>
                <a href="susrejestracja.php">
                    Rejestracja
                </a>
            </li>
            <li>
                <a href="susustawienia.html">
                Ustawienia
                </a>
            </li>
            <li>
                <a href="amongus.php">
                Strona Główna
                </a>
            </li>
        </ul>
    </section>

    <section>
        <form method="post" action="susrejestracja.php">
            <label>Nazwa użytkownika</label><input type="text" name="Nazwa_uzytkownika"><br>
            <label>E-mail</label><input type="text" name="Email"><br>
            <label>Numer telefonu</label><input type="number" name="Numer_telefonu"><br>
            <label>Ulubiona ryba</label><input type="text" name="Ulubiona_ryba"><br>
            <label>Hasło</label><input type="text" name="Haslo"><br>
            <button type="submit" value="WYŚLIJ">WYŚLIJ</button>
        </form>
    </section>
</body>
</html>
<?php
    $Nazwa_uzytkownika = $_POST['Nazwa_uzytkownika'];
    $Email= $_POST['Email'];
    $Numer_telefonu= $_POST['Numer_tlefonu'];
    $Ulubiona_ryba = $_POST['Ulubiona_ryba'];
    $Haslo = $_POST['Haslo'];
    $db = 'wedkowanie';
    $pass = '';
    $user = 'root';
    $server = 'localhost';

    $conn = new mysqli($server, $user, $pass, $db);

    $sql = "INSERT INTO `loginy`(`nazwa`, `haslo`, `email`, `numer_telefonu`, `ulubiona_ryba`) VALUES ('$Nazwa_uzytkownika','$Email','$Numer_telefonu','$Ulubiona_ryba','$Haslo')";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Fiato rosa</title>
</head>
<body>
    
<?php 
    include 'header.php';
?>
    
    <main class="login">

    <h3>Registrácia</h3>
        <form id="login-form" class="my-form" method="POST">
            <input type="text" name="username" class="login-name" placeholder="Zadaj meno">
            <input type="password" name="password" class="login-password" placeholder="Zadaj heslo">
            <input type="password" name="controlPassword" class="login-password" placeholder="Zopakuj heslo">
            <input type="submit" name="loginSubmit" value="Potvď" id="submit">
        </form>

<?php
        // REGISTRATION FORM
    if(isset($_POST['loginSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $controlPassword = $_POST['controlPassword'];
        $succesRegistration = 'Boli ste úspešne prihlásený.';
        $failurRegistration = 'Prihlásenie neúspešné, skontrolujte meno a/alebo heslo.';

        // zahashovanie hesla
        $hashFormat = "$2y$10$";
        $salt = "u9YPT1kh13fEPGlMmkWrID";
        $hasFormat_salt = $hashFormat.$salt;
        
        $password = crypt($password, $hasFormat_salt);
        $controlPassword = crypt($controlPassword, $hasFormat_salt);

        // pripojenie do databazy
        $connection = mysqli_connect('localhost', 'root', '', 'fiato_login');

        // if($connection){
        //     echo 'sme pripojeni k databaze';
        // } else {
        //     echo 'nepripojeni k databaze, niekde je chyba';
        // }

        if ($password !== $controlPassword){
            echo 'hesla sa nezhoduju';
            echo '<br>';
        } else {
            echo 'heslo je v poriadku';
            echo '<br>';

            // overenie, ci username a password existuju = ci odoslalo data z formulara
            if($username && $password) {
                echo $username;
                echo '<br>';
                echo $password;
                echo '<br>';
    
                // odoslanie dat do databazy
                $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";
        
                $result = mysqli_query($connection, $query);
        
                if(!$result){
                    die('Odoslanie do databazy zlyhalo'.mysqli_error());
                }
            } else {
                echo 'Nieco nam chyba';
            }
        }
    }
?>
        <div class="wrong-data">
            <p class="wrong-data-text"></p>
        </div>

        <h3>Prihlásenie</h3>
        <form id="registration-form" class="my-form" method="POST">
            <input type="text" name="username" class="login-name" placeholder="Zadaj meno">
            <input type="password" name="password" class="login-password" placeholder="Zadaj heslo">
            <!-- <input type="password" name="controlPassword" class="login-password" placeholder="Zopakuj heslo"> -->
            <input type="submit" name="registrationSubmit" value="Potvď" id="submit">
        </form>

<?php

    // LOGIN FORM
    if(isset($_POST['registrationSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // zahashovanie hesla
        $hashFormat = "$2y$10$";
        $salt = "u9YPT1kh13fEPGlMmkWrID";
        $hasFormat_salt = $hashFormat.$salt;
        
        $password = crypt($password, $hasFormat_salt);

        // pripojenie do databazy
        $connection = mysqli_connect('localhost', 'root', '', 'fiato_login');

        // vyber dat z databazy podla prihlasovacieho mena
        $controlPassword = "SELECT * FROM users WHERE username='$username'";

        $controlResult = mysqli_query($connection, $controlPassword);
        $controlRow = mysqli_fetch_assoc($controlResult);

        if($password === $controlRow["password"]) {
            echo 'uspesne prihlaseny';
        } else {
            echo 'zle meno alebo heslo';
        }
    }
?>

        <div class="wrong-data">
            <p class="wrong-data-text"></p>
        </div>

    </main>
    

    <footer>

    </footer>
    
    <script src="js/functions.js"></script>
    <script src="js/header.js"></script>
    <script src="js/login.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>
<?php

// LOGIN FORM
    if(isset($_POST['loginSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $controlPassword = $_POST['controlPassword'];

        // zahashovanie hesla
        $hashFormat = "$2y$10$";
        $salt = "u9YPT1kh13fEPGlMmkWrID";
        
        $hasFormat_salt = $hashFormat.$salt;
        
        $password = crypt($password, $hasFormat_salt);
        $controlPassword = crypt($controlPassword, $hasFormat_salt);
        echo $username;
        echo '<br>';
        echo $password;
        echo '<br>';
        echo $controlPassword;

        // overenie, ci username a password existuju = ci odoslalo data z formulara
        if($username && $password) {
            echo $username;
            echo '<br>';
            echo $password;
        } else {
            echo 'Nieco nam chyba';
        }

        // pripojenie do databazy
        $connection = mysqli_connect('localhost', 'root', '', 'fiato_login');

        if($connection){
            echo 'sme pripojeni k databaze';
        } else {
            echo 'nepripojeni k databaze, niekde je chyba';
        }

        // odoslanie dat do databazy
        $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Odoslanie do databazy zlyhalo'.mysqli_error());
        }
    }
?>


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
        <div class="wrong-data">
            <p class="wrong-data-text"></p>
        </div>

        <h3>Prihlásenie</h3>
        <form id="registration-form" class="my-form" method="POST">
            <input type="text" name="username" class="login-name" placeholder="Zadaj meno">
            <input type="password" name="password" class="login-password" placeholder="Zadaj heslo">
            <input type="password" name="controlPassword" class="login-password" placeholder="Zopakuj heslo">
            <input type="submit" name="registrationSubmit" value="Potvď" id="submit">
        </form>
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
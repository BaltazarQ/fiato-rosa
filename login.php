<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

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

        <form id="login-form" method="POST">
            <input type="text" name="username" id="login-name" placeholder="Zadaj meno: fiato">
            <input type="password" name="password" id="login-password" placeholder="Zadaj heslo: rosa">
            <input type="submit" name="submit" value="Potvď" id="submit">
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
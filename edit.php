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
    
    <main class="edit-section">

        <p>Chceš zmeniť svoj úmysel? Môžeš tak urobiť v tomto políčku.</p>        
        <form id="edit-form" method="$_POST" action="edit.php">
            <input type="text" name="editIntention" id="edit-intention" placeholder="Úmysel" value="<?php 
                // $id = $_GET['id'];

                $myIntention = isset($_GET['intention']);
                $myEditIntention = isset($_GET['editIntention']);

                if($myIntention){
                    $myIntention = $_GET['intention'];
                    echo $myIntention;
                } else if ($myEditIntention) {
                    $myEditIntention = $_GET['editIntention'];
                    echo $myEditIntention;
                } else {
                    echo 'nastala nejaka chyba';
                };?>">
            <input type="submit" name="editSubmit" value="Zmeň">
        </form>
    </main>
    

    <footer>

    </footer>
    
    <script src="js/uuidv4.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/header.js"></script>
    <script src="js/edit.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>
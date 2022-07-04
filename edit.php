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
    <header>
        <section class="title">
            <h1><a href="index.html">Fiato Rosa</a></h1>
        </section>
        <nav class="navbar-section">
            <ul class="navbar">
                <li class="rose"><a class="rose-a" href="index.html">Modlitba ruženca</a>
                    <ul class="rose-menu">
                        <li><a href="index.html">Ako sa modlí ruženec</a></li>
                        <li><a href="login.html">Môj desiatok</a></li>
                        <li><a href="mysteries.html">Tajomstvá ruženca</a></li>
                    </ul>
                </li>
                <li><a class="rose-a" href="login.html">Môj desiatok</a></li>
                <li><a class="rose-a" href="contact.html">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="edit-section">

        <p>Chceš zmeniť svoj úmysel? Môžeš tak urobiť v tomto políčku.</p>
        <form id='edit-form'>
            <textarea type="text" name="editIntention" id="edit-intention" placeholder="Úmysel"></textarea>
            <input type="submit" value="Zmeň">
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
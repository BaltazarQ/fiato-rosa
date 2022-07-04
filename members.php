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
    
    <main class="main-members">

        <div class="main teens-selection">
            <section class="text">
                <h3>Pozri si svoj aktuálny desiatok na tento mesiac</h3>
                <p>Vyber si meno a po stlačení "Vyhľadaj" sa ti zobrazí tvoj desiatok pre tento mesiac.</p>
            </section>
            <section class="date">
                <div>Dnešný dátum: <span id="date"></span></div>
            </section>
            
            <div id="search-name">
                <input type="text" name="name" id="full-name" placeholder="Zadaj meno člena">
                <section class="result"></section>
            </div>
            <form id="my-form" action="">
                <div class="form-section">
                    <select name="name" id="name" onchange="getOption()">
                        <option value="">Vyber meno</option>
                    </select>
                    <input type="submit" value="Vyhľadaj">
                </div>
                <div class="result-section"></div>
            </form>
        </div>
        
        <aside class="members">
            <section>
                <h3>Zoznam členov</h3>
                <div id="members"></div>
            </section>
        </aside>
    </main>
    

    <footer>

    </footer>
    
    <script src="js/functions.js"></script>
    <script src="js/header.js"></script>
    <script src="js/script.js"></script>
    <script src="js/rose.js"></script>
    
</body>
</html>
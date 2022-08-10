<aside class="intentions">

<?php

    // LOGIN FORM
    if(isset($_POST['intentionSubmit'])){
        $intention = $_POST['intention'];

        // pripojenie do databazy
        $connection = mysqli_connect('localhost', 'root', '', 'fiato_login');

        if ($intention !== ''){
            // odoslanie dat do databazy
            $query = "INSERT INTO intentions(intention) VALUES('$intention')";
            $result = mysqli_query($connection, $query);
            
            if(!$result){
                die('Odoslanie do databazy zlyhalo'.mysqli_error());
             }
             
            //  echo 'umysel zapisany do databazy';
            //  header('Location: members.php');
        } else {           
            echo 'Chýba meno, heslo alebo potvrdenie hesla.';
        }
    }
?>

    <section id="">
        <h3>Naše úmysly</h3>
        <div class="int-list">

    <?php

        $connection = mysqli_connect('localhost', 'root', '', 'fiato_login');
        $query = "SELECT * FROM intentions";

        $result = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="result-list">';
            echo('<a href="edit.php#' . $row["id"] . '" class="one-intention">' . $row["intention"] . '</a>');
            echo('<button class="int-remove tooltip">X<span class="tooltiptext">Zmazať</span></button>');
            // echo();
            echo '</div>';
        }

    ?>


        </div>
        <form class="intentions-form" method="POST">
            <input type="text" name="intention" id="intentions-text" placeholder="Pridaj svoj úmysel">
            <input type="submit" name="intentionSubmit" value="Pridaj">
        </form>
        <p class="notes">Kliknutím na úmysel ho môžeš zmeniť.</p>
        <p class="notes">Kliknutím na krížik ho môžeš vymazať.</p>
    </section>
</aside>
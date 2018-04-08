<?php

session_start();

if(!isset($_SESSION['zalogowany'])) {
    header('Location:index.php');
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wekert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="inwestycje.css">
</head>
<body>
    <header>
        <!-- Inwestycja -->
        <section clas="top">
            <div class="NazwaInwestycji">
                <form action="" method="post">
                    <label class="opis"for="WprInwestycji">Nazwa inwestycji</label><br>
                    <input type="text" name="WprInwestycji">
                    <input type="checkbox" name="komplikacja" value="Skomplikowany">
                    <label for="komplikacja">Utrudnienie</label>
                   
                </form>
            </div>
                  
        </section>
    </header>
        <hr>
    <dane>
        <!-- Główne parametry inwestycji -->
        <?php
            echo '<span style="color: white;">'. "Witaj ".$_SESSION['uzytkownik']."!".'</span>';
            echo ' | <a style="color:yellow" href="logout.php">Wyloguj się!</a>'
          
        ?>
        <section class="blok1">
            <div class="PowierzchniaGrubosc">
                <form action="" method="post">
                    <label for="Powierzchnia" class="etykieta1">Pomiar powierzchni</label><br>
                    <input type="text" name = "Powierzchnia1"><label> m2</label><br>
                    <label for="Grubosc">Grubość izolacji</label><br>
                    <input type="text" name ="Grubosc"><label for="Grubosc"> cm</label><br>
                    
                    <?php              
                      print '<button type="submit" name="submit2" value="Dodaj">Dodaj</button>';
                      if(isset($_POST['submit2'])){ ?>
                        <hr>
                        <label>Pomiar dodatkowej powierzchni</label>
                        <input type="int" name='Powierzchnia2' value=0><label> m2</label><br>
                        <label>Grubość dodatkowej izolacji</label>
                        <input type="int" name='Grubość2' value=0><label> cm</label><br>
                        <button type="submit" name="submit1" value="Usuń">Usuń</button>
                    <?php } ?>

                </form>
            </div>
        </section>
        <!-- Dane materiałowe -->
        <section class="blok1">
            <div class="MaterialZakupKurs">
                <form action="indexRM.html">
                    <label for="material">Materiał</label><br>
                    <select name="material" id="a1">
                        <option>Crossin</option>
                        <option>Ekoprodur S0310</option>
                        <option>AlmaColor</option>
                    </select><br>
                    <label for="KosztZakupu">Koszt zakupu</label><br>
                    <input type="text" name = "KosztZakupu"> 
                        <select name="waluta" id="a2">
                            <option>euro/kg</loption>
                            <option>zł/kg</option>
                        </select><br>
                    <label for="KursRuro">Kurs euro</label><br>
                    <input type="text" name = "KursEuro"> <label> zł/euro</label> 
                </form>                   
                    </section>
                    
                    <form action="" method="post">    
                        <div class="PrzyciskWyslij"> 
                        <input class="przycisk" type="submit" name ="submit" value="Wyślij">
                            <?php
                                 if(isset($_POST['submit'])){
                                 echo ("Jest ok");                                  
                                 $_SESSION['wprowadz_dane']=1;
                                 header('Location: add_db_inwestycje.php');
                                 }
                            ?>
                        </div> 
                    </form>
                </dane>
   
    <footer>
        <p>&copy; WEKERT</p>
    </footer>







</body>
</html>
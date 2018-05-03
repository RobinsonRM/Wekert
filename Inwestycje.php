<?php

 require_once "connect.php";
 $polaczenie =new mysqli($host,$db_user,$db_password,$db_name);

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
    <form action="" method="post">
        <section clas="top">
            <div class="NazwaInwestycji">
                    <label class="opis"for="WprInwestycji">Nazwa inwestycji</label><br>
                    <input type="text" name="WprInwestycji">
                    <input type="checkbox" name="komplikacja" value="Skomplikowany">
                    <label for="komplikacja">Utrudnienie</label>                    
            </div>
                  
        </section>
    </header>
    <a href="add_db_inwestycje.php" style="color:#1FE300; margin:20px">Szczegóły inwestycji wykonanych</a>   <!-- brak zabezpieczenia wejścia bezpośrednio z wiersza poleceń -->
        <hr>
    <dane>
        <!-- Główne parametry inwestycji -->
        <?php
            echo '<span style="color: white;">'. "Witaj ".$_SESSION['uzytkownik']."!".'</span>';
            echo ' | <a style="color:yellow" href="logout.php">Wyloguj się!</a>'
          
        ?>
        <section class="blok1">
            <div class="PowierzchniaGrubosc">
                    <label for="Powierzchnia" class="etykieta1">Pomiar powierzchni</label><br>
                    <input type="text" name = "Powierzchnia1" ><label> m2</label><br>
                    <label for="Grubosc">Grubość izolacji</label><br>
                    <input type="text" name ="Grubosc1"><label for="Grubosc1"> cm</label><br>
               

                    <?php   
                                   
                      print '<button type="submit" name="submit2" value="Dodaj">Dodaj</button>';
                      if(isset($_POST['submit2'])){ ?>
                    
                        <hr>
                        <label>Pomiar dodatkowej powierzchni</label>
                        <input type="int" name='Powierzchnia2' value=0><label> m2</label><br>
                        <label>Grubość dodatkowej izolacji</label>
                        <input type="int" name='Grubosc2' value=0><label> cm</label><br>
                        <button type="submit" name="submit1" value="Usuń">Usuń</button>
                    <?php } ?>

            </div>
        </section>
        <!-- Dane materiałowe -->
        <section class="blok1">
            <div class="MaterialZakupKurs">
               
                    <label for="material">Materiał</label><br>
                    <select name="material" id="a1">
                        <option> Wprowadź materiał</option>
                        <option>Crossin</option>
                        <option>Ekoprodur S0310</option>
                        <option>AlmaColor</option>
                    </select><br>
                    <label for="KosztZakupu">Koszt zakupu</label><br>
                    <input type="text" name = "KosztZakupu"> 
                        <select name="waluta">
                            <option>euro/kg</loption>
                            <option>zł/kg</option>
                        </select><br>
                    <label for="KursEuro">Kurs euro</label><br>
                    <input type="text" name = "KursEuro"> <label> zł/euro</label> 
                                  
                    </section>  

        <div class="PrzyciskWyslij"> 
        <input class="przycisk" type="submit" name ="submit" value="Wyślij">       
        </div> 
                   
    </dane>
    
    <!-- Wprowadzenie danych do bazy - Określenie zmiennych -->
    <?php

    if(isset($_POST['submit'])) {
        
        $inwestycja = $_POST['WprInwestycji'];
        $powierzchnia1 = $_POST['Powierzchnia1'];
        $grubosc1 = $_POST['Grubosc1'];
        $material = $_POST['material'];
        $kosztZakupu = $_POST['KosztZakupu'];
        $waluta = $_POST['waluta'];
        $kursEuro =$_POST['KursEuro'];
        $powierzchnia2 = $_POST['Powierzchnia2'];
        $grubosc2 = $_POST['Grubosc2'];
    } else {
        $inwestycja = 0;
        $powierzchnia1 = 0;
        $grubosc1 = 0;
        $material = 0;
        $kosztZakupu = 0;
        $waluta = 0;
        $kursEuro = 0; 
        $powierzchnia2 = 0;
        $grubosc2 = 0;
    }   
 
        // Wprowadzenie danych formularza do bazy danych //   

    if (isset($_POST['submit'])) {
          
        if ($inwestycja=='' || $powierzchnia1=='' || $grubosc1=='' || $material=='' || $kosztZakupu=='' || $waluta=='' || $kursEuro=='') {
            echo '<span style="color:yellow">'."Wprowadź wszystkie dane!".'</span><br/>';

            } else {

                if($wprowadzanie = $polaczenie->prepare("INSERT wyliczanka (nazwa_inwestycji, powierzchnia1, grubosc1, powierzchnia2, grubosc2, material, koszt_zakupu, waluta, kurs_euro) VALUES ('$inwestycja','$powierzchnia1','$grubosc1','$powierzchnia2','$grubosc2','$material','$kosztZakupu','$waluta','$kursEuro')") ) {
                    $wprowadzanie->execute();
                    $wprowadzanie->close();
                    header('Location: add_db_inwestycje.php'); 
                } else {
                    echo "Błąd zapytania";
                }
            }
        }
            
    $_SESSION['inwestycja'] = $inwestycja;
    $_SESSION['powierzchnia1'] = $powierzchnia1;
    $_SESSION['grubosc1'] = $grubosc1;
    $_SESSION['material'] = $material;
    $_SESSION['KosztZakupu'] = $kosztZakupu;
    $_SESSION['waluta'] = $waluta;
    $_SESSION['KursEuro'] = $kursEuro;
           
    if(isset($powierzchnia2, $grubosc2)) {
        $_SESSION['powierzchnia2'] = $powierzchnia2;
        $_SESSION['grubosc2'] = $grubosc2;
    }
        
    
    ?>
<footer>
    <p>&copy; WEKERT</p>
</footer>

</body>
</html>
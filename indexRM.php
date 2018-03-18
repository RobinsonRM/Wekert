<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wekert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="mainRM.css">
</head>
<body>
    <header>
        <!-- Inwestycja -->
        <section clas="top">
            <div class="NazwaInwestycji">
                <form action="indexRM.html">
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
        <section class="blok1">
            <div class="PowierzchniaGrubosc">
                <form action="" method="post">
                    <label for="Powierzchnia" class="etykieta1">Pomiar powierzchni</label><br>
                    <input type="text" name = "Powierzchnia1"><label> m2</label><br>
                    <label for="Grubosc">Grubość izolacji</label><br>
                    <input type="text" name ="Grubosc"><label for="Grubosc"> cm</label><br>
                    
                    <?php
                      if(isset($_POST['submit'])){ ?>
                        <hr>
                        <label>Pomiar drugiej powierzchni</label>
                        <input type="int" name='Powierzchnia2'><label> m2</label><br>
                        <label>Grubość drugiej izolacji</label>
                        <input type="int" name='Grubość2'><label> cm</label><br>
                        <button type="submit" name="submit2" value="Usuń">Usuń</button>
                    <?php } ?>


                    <button type="submit" name="submit" value="Dodaj">Dodaj</button>
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
            </div>
        </section>
        
    <div class="PrzyciskWyslij"> 
        <input class="przycisk" type="submit" name ="wyslij" value="Wyślij">
    </div> 
    </dane>
   
    <footer>
        <p>&copy; Opracowano - WEKERT</p>
    </footer>

</body>
</html>
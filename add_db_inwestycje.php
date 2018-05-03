

<?php
session_start();

//Połączenie z bazą//
require_once "connect.php";
$polaczenie =new mysqli($host,$db_user,$db_password,$db_name);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szczegóły Inwestycji</title>
</head>
<body>

<!-- Tabela ze szczegółami inwstycji -->
<div class=szczegolyInwestycji>
    <h1>Szczegóły Inwestycji</h1> 
    <a href="Inwestycje.php" style="color:#1FE300; font-size: 20px; margin:20px; padding:10px">Powrót</a>      <!-- brak zabezpieczenia wejścia bezpośrednio z wiersza poleceń -->
</div>               
 
<?php




// Wyświetlenie Szczegółów Inwestycji //
   if ($result = $polaczenie->query("SELECT * FROM wyliczanka ORDER BY id")) {
           
        if($result->num_rows >0) {
       
            echo "<table border ='1' cellpadding = '4'>";
        
            echo "<tr>
                    <th>Nazwa inwestycji</th>
                    <th>Powierzchnia 1</th>
                    <th>Grubość 1</th>
                    <th>Powierzchnia 2</th>
                    <th>Grubość 2</th>
                    <th>Rodzaj materiału</th>
                    <th>Koszt zakupu</th>
                    <th>Waluta</th>
                    <th>Kurs euro</th>
                </tr>";


       while($row =$result->fetch_object()){
            echo "<tr>";
            echo "<td>" . $row->nazwa_inwestycji . "</td>";
            echo "<td>" . $row->powierzchnia1 . "</td>";
            echo "<td>" . $row->grubosc1 . "</td>";
            echo "<td>" . $row->powierzchnia2 . "</td>";
            echo "<td>" . $row->grubosc2 . "</td>";
            echo "<td>" . $row->material . "</td>";
            echo "<td>" . $row->koszt_zakupu . "</td>";
            echo "<td>" . $row->waluta . "</td>";
            echo "<td>" . $row->kurs_euro . "</td>";        
            echo "</tr>";
        }
        
        echo "</table>";

        } else {
            echo "Brak rekordów";
        }

    } else {
        echo "Błąd: " . $polaczenie->error; 
    }

$polaczenie ->close();

?>
<a href="Inwestycje.php" style="color:#1FE300; font-size: 20px; margin:20px; padding:10px">Powrót</a>      <!-- brak zabezpieczenia wejścia bezpośrednio z wiersza poleceń -->
</body>
</html>
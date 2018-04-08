

<?php
session_start();

echo ($_SESSION['wprowadz_dane']); //sprawdzenie czy zmienna jest przekazana //


/*require_once "connect.php";

$polaczenie =new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0){
    echo "Error: ".$polaczenie->connect_errno;
} else {
    echo ($_SESSION['inwestycja']);
    $komplikacja = $_POST['komplikacja'];
    $Powierzchnia1 = $_POST['Powierzchnia1'];
    $Grubosc = $_POST['Grubosc'];
    $Powierzchnia2 = $_POST['Powierzchnia2'];
    $Grubosc2 = $_POST['Grubosc2'];
} 
*/
   

/*if((!isset($_POST['login'])) || (!isset($_POST['haslo']))) {
    header('Location:index.php');
    extit();
}

require_once "connect.php";

$polaczenie =new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0){
    echo "Error: ".$polaczenie->connect_errno;
} else {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
    
   // $sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND password='$haslo'"; //

    if($rezultat = @$polaczenie->query(
    sprintf("SELECT * FROM uzytkownicy WHERE login='%s' AND password='%s'",
    mysqli_real_escape_string($polaczenie,$login),
    mysqli_real_escape_string($polaczenie,$haslo))))
    {
        $ilu_loginow = $rezultat->num_rows;
        if($ilu_loginow>0) {

            $_SESSION['zalogowany']=true;

            $wiersz = $rezultat->fetch_assoc();
            $_SESSION['id'] = $wiersz['id'];
            $_SESSION['uzytkownik'] = $wiersz['login'];

            unset($_SESSION['blad']);

            $rezultat->free_result(); 
            header('Location:Inwestycje.php');
            
        } else{

            $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
            header('Location: index.php');
           
        }
    }

    $polaczenie->close();
}

*/


?>
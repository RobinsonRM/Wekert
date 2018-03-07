<?php

/*$iloscM2 = 761;
$iloscDni = 1;
$komplikacja = 1;
$standard = [220, 400, 580, 760, 910];
$komplikacja = [150,300,450,600,750];*/

Teraz zmiany.
 
$komplikacja = 1;
$iloscM2 = 300;

if ($komplikacja == 1) {
    echo komplikacja ($iloscM2);
} else {
    echo standard ($iloscM2);
}


function standard ($powierzchnia) {
  
    if($powierzchnia <= 220) {
       echo $iloscDni = 1 . ' dzień - obiekt standardowy';
    }
    elseif ($powierzchnia >= 220 && $powierzchnia <= 400){
        echo $iloscDni = 2 .' dni - obiekt standardowy';
        }
    elseif ($powierzchnia >= 400 && $powierzchnia <= 580){
        echo $iloscDni = 3 . ' dni - obiekt standardowy';
    }
    elseif ($powierzchnia >= 580 && $powierzchnia <= 760){
        echo $iloscDni = 4 . 'dni - obiekt standardowy';
    }
    elseif ($powierzchnia >= 760 && $powierzchnia <= 910) {
        echo $iloscDni = 5 . 'dni - obiekt standardowy';
    }
    else {
        echo "Realizacja inwestycji powyżej 1 tygodnia";
    }    
}

function komplikacja ($powierzchnia) {
    
    if($powierzchnia <= 150) {
       echo $iloscDni = 1 . ' dzień - obiekt skopmplikowany';
    }
    elseif ($powierzchnia >= 150 && $powierzchnia <= 300){
        echo $iloscDni = 2 . ' dni - obiekt skomplikowany';
        }
    elseif ($powierzchnia >= 300 && $powierzchnia <= 450){
        echo $iloscDni = 3 . ' dni - obiekt skomplikowany';
    }
    elseif ($powierzchnia >= 450 && $powierzchnia <= 600){
        echo $iloscDni = 4 . ' dni - obiekt skomplikowany';
    }
    elseif ($powierzchnia >= 600 && $powierzchnia <= 750) {
        echo $iloscDni = 5 . 'dni - obiekt skomplikowany';
    }
    else {
        echo "Realizacja inwestycji powyżej 1 tygodnia";
    }    
}




?>
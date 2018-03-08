<?php

$komplikacja = 0;
$iloscM2 = 555;

if ($komplikacja == 1) {
    echo komplikacja ($iloscM2);
} else {
    echo standard ($iloscM2);
}


function standard ($powierzchnia) {
   $standard = [220, 400, 580, 760, 910];                       //Standardowe powierzchnie
   

    if($powierzchnia <= $standard[0]) {
       echo $iloscDni = 1 . ' dzień - obiekt standardowy';
    }
    elseif ($powierzchnia >= $standard[0] && $powierzchnia <= $standard[1]){
        echo $iloscDni = 2 .' dni - obiekt standardowy';
        }
    elseif ($powierzchnia >= $standard[1] && $powierzchnia <= $standard[2]){
        echo $iloscDni = 3 . ' dni - obiekt standardowy';
    }
    elseif ($powierzchnia >= $standard[2] && $powierzchnia <= $standard[3]){
        echo $iloscDni = 4 . 'dni - obiekt standardowy';
    }
    elseif ($powierzchnia >= $standard[3] && $powierzchnia <= $standard[4]) {
        echo $iloscDni = 5 . 'dni - obiekt standardowy';
    }
    else {
        echo "Realizacja inwestycji powyżej 1 tygodnia";
    }    
}

function komplikacja ($powierzchnia) {
    $komplikacja = [150,300,450,600,750];                       //Skomplikowane powierzchnie
    
    if($powierzchnia <= $komplikacja[0]) {
       echo $iloscDni = 1 . ' dzień - obiekt skopmplikowany';
    }
    elseif ($powierzchnia >= $komplikacja[0] && $powierzchnia <= $komplikacja[1]){
        echo $iloscDni = 2 . ' dni - obiekt skomplikowany';
        }
    elseif ($powierzchnia >= $komplikacja[1] && $powierzchnia <= $komplikacja[2]){
        echo $iloscDni = 3 . ' dni - obiekt skomplikowany';
    }
    elseif ($powierzchnia >= $komplikacja[2] && $powierzchnia <= $komplikacja[3]){
        echo $iloscDni = 4 . ' dni - obiekt skomplikowany';
    }
    elseif ($powierzchnia >= $komplikacja[3] && $powierzchnia <= $komplikacja[4]) {
        echo $iloscDni = 5 . 'dni - obiekt skomplikowany';
    }
    else {
        echo "Realizacja inwestycji powyżej 1 tygodnia";
    }    
}




?>
<?php
#Prüfe, ob Spieler besetzt wurde und wenn dann in Array abspeichern
$spieler[]
if(isset($_POST["spieler1"])){
    array_push($spieler, $_POST["spieler1"])
}
if(isset($_POST["spieler2"])){
    array_push($spieler, $_POST["spieler2"])
}
if(isset($_POST["spieler3"])){
    array_push($spieler, $_POST["spieler3"])
}
if(isset($_POST["spieler4"])){
    array_push($spieler, $_POST["spieler4"])
}

#Auswahl des Spions
$spion = random_int(1,count($spieler))
for($i=0;$i<count($spieler);$i++){
    $aktuellerSpieler = $spieler[i]
    print("<input type=‘button‘ value=‘$aktuellerSpieler\‘ disabled=‘disabled‘")
}
#Darstellen der Buttons um Rolle abzufragen
?>
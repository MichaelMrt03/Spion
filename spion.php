<?php
#Variablen
$worte = ["Hochaus","Meer","Telefon"]; #Wörterliste
$anzahlWorte = count($worte);
$anzahlSpieler = 4;

#Startbutton

#Auswahl welches Wort
$wort = random_int(0,$anzahlWorte);

#Auswahl wer Spion wird
$spion = random_int(0,$anzahlSpieler)

#Eingabe der Namen
print("
    <form action=‘spielstart.php?spion=$spion\‘ method=‘POST‘>
        <input type=‘text‘ placeholder=‘spieler1‘ name=‘spieler1‘ ><br><br>
        <input type=‘text‘ placeholder=‘spieler2‘ name=‘spieler2‘ ><br><br>
        <input type=‘text‘ placeholder=‘spieler3‘ name=‘spieler3‘ ><br><br>
        <input type=‘text‘ placeholder=‘spieler4‘ name=‘spieler4‘ ><br><br>
        <button type=‘submit‘>Spielstart!</button>
    </form>
");


#Ansatz für variable Anzahl an Spielern
// for($i;$i<$anzahlSpieler;$i=0){
//     print("<input type=‘text‘ name=‘$spieler[]‘ ><br><br>");

#Auswahl wer Spion wird

#Ausgabe der Wörter/Spion 

#Timer

?>
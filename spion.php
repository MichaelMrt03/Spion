<?php
#(Test-)Array an Wörtern
$wörter = ['"Universität"', '"Parlament"', '"Schule"', '"Schiff"'];
#CSS einbinden
print("<link rel='stylesheet' type='text/css' href='style.css'>");

#JavaScript einbinden
print("<script src='script.js' async></script>");


print("<h1> Spion </h1>");
print("<div>");
#Anzahl an Spielern
#Erstes Formular
if (!isset($_POST["spieleranzahl"])) {
    print("
    <form action='spion.php' method='POST'>
        <label for='number'>Spieleranzahl:</label>
        <input type='number' placeholder='Spieleranzahl hier eingeben...' name='spieleranzahl' ><br><br>
        <div><input type='submit' value='Senden'></input></div>
    </form>
  </div>
");
}


#Ansatz für variable Anzahl an Spielern
#Zweites Formular
if (isset($_POST["spieleranzahl"]) && !isset($_POST["spielername0"])) {
    print("
    <div>
    <form action='spion.php' method='POST'>");
    $anzahlSpieler = $_POST["spieleranzahl"];
    if ($anzahlSpieler < 2) { #Eingabeprüfung 
        echo "<div class='fehler' style='background-color: red; color: white;'>Bitte mindestens 2 Spieler angeben</div>";
    } else {
        for ($i = 0; $i < $anzahlSpieler; $i++) {
            $spieler_nr = $i + 1;
            $placeholder = "Name für Spieler " . $spieler_nr . " eingeben...";
            print("
            <label for='spielername'>Spielername:</label>
            <input type='text' placeholder=$placeholder name='spielername$i' ><br><br>");
        }
        #Timer-Dauer einstellen
        print(" <input name='dauer' type='number' placeholder='Dauer des Timers in Minuten'>");
        #Spieleranzahl für Formular2 sichern
        print(" <input type='hidden' name='spieleranzahl' value='$anzahlSpieler'>");

        print("
            <div><input type='submit' value='Senden'></input></div>
        </form>
     </div>"
    
    );
    }
}

#Formular3
if (isset($_POST["spieleranzahl"]) && isset($_POST["spielername0"])) {
    print("<div>");
    if (empty($_POST["spielername0"])) { #Eingabeprüfung
        echo "<div class='fehler' style='background-color: red; color: white;'>Bitte alle Felder ausfüllen</div>";
    } else {
	    
        #Auswahl wer Spion wird
        $spion = random_int(0, $_POST["spieleranzahl"]-1);
        #Auswahl des Wortes
        $wort = wortauswahl($wörter);
        #Ausgabe der Wörter/Spion 
        for ($i = 0; $i < $_POST["spieleranzahl"]; $i++) {
            if($i == $spion){
             print("<button class ='standard' onClick='spion()'>" . $_POST['spielername' . $i] . "</button>");
            } else if ($i != $spion) {
             print("<button class='standard' onClick='nichtSpion($wort)' >" . $_POST['spielername' . $i] .  "</button>");
         }
      }
    }
    #Timer

    $dauerSekunden=$_POST["dauer"]*60;
    #Dauer in Sekunden über Button an Funktion für Timer weitergegeben
    print("<button onClick='timer($dauerSekunden)'>Timer starten!</button>");
    #Ausgabe für den Timer
    print("<input disabled placeholder='" . $_POST["dauer"] . ":00' id='timer'>");
    print("</div");
}
print("</div>");

#Funktion für die Auswahl eines Wortes
function  wortauswahl(array $wörter){
    return $wörter[random_int(0,count($wörter)-1)];
}

#Liefert true zurück, wenn alle Namen eingegeben wurden
function NamensEingabePruefen(){
    for($nr=0;$nr<$_POST['spieleranzahl'];$nr++){
        if(!isset($_POST["spielername$nr"])){
            	return false;
        }
    return true;
    }
}
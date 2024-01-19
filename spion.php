<?php

#CSS einbinden
print("<link rel='stylesheet' type='text/css' href='style.css'>");

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
    for ($i = 0; $i < $anzahlSpieler; $i++) {
        $spieler_nr = $i + 1;
        $placeholder = "Name für Spieler " . $spieler_nr . " eingeben...";
        print("
        <label for='spielername'>Spielername:</label>
        <input type='text' placeholder=$placeholder name='spielername$i' ><br><br>");
    }
    #Spieleranzahl für Formular2 sichern
    print(" <input type='hidden' name='spieleranzahl' value='$anzahlSpieler'>");

    print("
            <div><input type='submit' value='Senden'></input></div>
        </form>
     </div>"
    
    );
}

#Formular3
if (isset($_POST["spieleranzahl"]) && isset($_POST["spielername0"])) {
    print("<div>");
    #Wenn die Spielernamen & Spieleranzahl gesetzt wurden, werden die Spieler ausgegeben
    for ($i = 0; $i < $_POST["spieleranzahl"]; $i++) {
        if (isset($_POST["spielername$i"])) {
            print($_POST["spielername$i"] . "<br>");
        } else {
            print("not set");
        }
    }
    print("</div");
}

#Auswahl wer Spion wird

#Ausgabe der Wörter/Spion 

#Timer

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
        <input type='number' placeholder='Spieleranzahl hier eingeben...' name='spieleranzahl' ><br><br>
        <button type='submit'>OK</button>
    </form>
");
}


#Ansatz für variable Anzahl an Spielern
#Zweites Formular
if (isset($_POST["spieleranzahl"]) && !isset($_POST["spielername0"])) {
    print("<form action='spion.php' method='POST'>");
    $anzahlSpieler = $_POST["spieleranzahl"];
    for ($i = 0; $i < $anzahlSpieler; $i++) {
        $spieler_nr = $i + 1;
        $placeholder = "Name für Spieler " . $spieler_nr . " eingeben...";
        print("<input type='text' placeholder=$placeholder name='spielername$i' ><br><br>");
    }
    #Spieleranzahl für Formular2 sichern
    print(" <input type='hidden' name='spieleranzahl' value='$anzahlSpieler'>");

    print("
            <button type='submit'>OK</button>
        </form>"
    );
}

#Formular3
if (isset($_POST["spieleranzahl"]) && isset($_POST["spielername0"])) {
    #Auswahl wer Spion wird
    $spion = random_int(0, $_POST["spieleranzahl"]);
    print("Spion: " . $_POST["spielername$spion"] . "<br>");
    #Wenn die Spielernamen & Spieleranzahl gesetzt wurden, werden die Spieler ausgegeben
    for ($i = 0; $i < $_POST["spieleranzahl"]; $i++) {
        if (isset($_POST["spielername$i"])) {
            print($_POST["spielername$i"] . "<br>");
        } else {
            print("not set");
        }
    }
}
print("</div>");
#Auswahl wer Spion wird

#Ausgabe der Wörter/Spion 

#Timer

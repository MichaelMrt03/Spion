<?php
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
    #Wenn die Spielernamen & Spieleranzahl gesetzt wurden, werden die Spieler ausgegeben
    for ($i = 0; $i < $_POST["spieleranzahl"]; $i++) {
        if (isset($_POST["spielername$i"])) {
            print($_POST["spielername$i"] . "<br>");
        } else {
            print("not set");
        }
    }
}

#Eingabe der Namen
// print("
//     <form action='spielstart.php' method='POST'>
//         <input type='text' placeholder='spieler1' name='spieler1' ><br><br>
//         <input type='text' placeholder='spieler2' name='spieler2' ><br><br>
//         <input type='text' placeholder='spieler3' name='spieler3' ><br><br>
//         <input type='text' placeholder='spieler4' name='spieler4' ><br><br>
//         <button type='submit'>Spielstart!</button>
//     </form>
// ");

#Auswahl wer Spion wird

#Ausgabe der Wörter/Spion 

#Timer

<?php
#Anzahl an Spielern
print("
    <form action='spion.php' method='POST'>
        <input type='number' placeholder='Spieleranzahl hier eingeben...' name='spieleranzahl' ><br><br>
        <button type='submit'>OK</button>
    </form>
");



#Ansatz für variable Anzahl an Spielern
if(isset($_POST["spieleranzahl"])){
    print("<form action='spielstart.php' method='POST'>");
    $anzahlSpieler = $_POST["spieleranzahl"];
    for($i=0;$i<$anzahlSpieler;$i++){
        $j=$i+1;
        $placeholder="Name für Spieler ".$j." eingeben...";
        print("<input type='text' placeholder=$placeholder name='$i\' ><br><br>");
    }

    print("
            <button type='submit'>OK</button>
        </form>"
    );
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

?>
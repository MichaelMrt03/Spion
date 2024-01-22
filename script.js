function spion() {
    alert("Du bist der Spion!");
}
function nichtSpion(Wort) {
    alert("Du bist nicht der Spion. Das Wort ist: " + Wort);
}
function timeAusgabe(zeit=300) {
    const timeOutput = document.getElementById("timer");
    setTimeout(() => {
        timeOutput.setAttribute("value", zeitFormatiert(gibMinutenSekunden(tempZeit)));
    }, "1000");
}
function gibMinutenSekunden(sekunden){
    arr = new Array();
    //Berechnen wie viel Minuten die Sekunden enthalten
    arr.push((sekunden-(sekunden%60))/60);
    //Berechnen wie viel Sekunden übrig bleiben wenn man die Minuten abzieht
    arr.push(sekunden-(arr[0]*60));
    return arr;
}
function zeitFormatiert(zeit){
    return zeit[0]+":"+zeit[1];
}
function timer(zeit=300){
    setTimeout(() => {
        timeAusgabe(300);
        tempZeit=tempZeit-1;
      }, "1000");
} 
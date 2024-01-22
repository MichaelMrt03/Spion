function spion() {
    alert("Du bist der Spion!");
}
function nichtSpion(Wort) {
    alert("Du bist nicht der Spion. Das Wort ist: " + Wort);
}
function gibMinutenSekunden(sekunden){
    arr = new Array();
    //Berechnen wie viel Minuten die Sekunden enthalten
    arr.push((sekunden-(sekunden%60))/60);
    //Berechnen wie viel Sekunden übrig bleiben wenn man die Minuten abzieht
    sekundenFormatiert = sekunden-(arr[0]*60);
    //Abfrage für füllende Null, wenn Sekunden einstellig sind
    if(sekundenFormatiert<10){
        arr.push("0"+sekundenFormatiert);
    }else{
        arr.push(sekundenFormatiert);
    }
    return arr;
}
function zeitFormatiert(zeit){
    return zeit[0]+":"+zeit[1];
}
function timer(zeit=300){
    const timeOutput = document.getElementById("timer");
    tempZeit = zeit;
    //Es werden zeitversetzt die Zeiten ausgegeben
    for(let i=0; i<=zeit; i++){
    setTimeout(() => {
        timeOutput.setAttribute("value", zeitFormatiert(gibMinutenSekunden(tempZeit)));
        tempZeit=tempZeit-1;
        if(i==zeit){
            alert("Die Zeit ist abgelaufen!");
        }
      }, (1000*i)+"");
    }
} 
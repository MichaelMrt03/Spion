function spion() {
    alert("Du bist der Spion!");
}
function nichtSpion(Wort) {
    alert("Du bist nicht der Spion. Das Wort ist: " + Wort);
}
function timer(zeit=600) {
    const timeOutput = document.getElementById("timer");
    timeOutput.setAttribute("value", zeit);
}
function gibMinutenSekunden(sekunden){
    arr = new Array();
    arr.push(sekunden%60);
    arr.push(sekunden-(arr[0]*60));
    return arr;
}

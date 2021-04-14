//Change cursor while hoverin over letters
/*-------------------------------------------------------------*/
document.getElementById("small").style.cursor = "pointer";
document.getElementById("medium").style.cursor = "pointer";
document.getElementById("big").style.cursor = "pointer";
/*-------------------------------------------------------------*/
//Reset letters color when mouse leave div space
/*-------------------------------------------------------------*/
function Out(){
    document.getElementById('small').style.color = "white";
    document.getElementById('medium').style.color = "white";
    document.getElementById('big').style.color = "white";
}
/*-------------------------------------------------------------*/
//Set letters orange while hovering over them
/*-------------------------------------------------------------*/
function mouseOverSmall() {
    document.getElementById('small').style.color = "#ffb703";
}
function mouseOverMedium() {
    document.getElementById('medium').style.color = "#ffb703";
}
function mouseOverBig() {
    document.getElementById('big').style.color = "#ffb703";
}
/*-------------------------------------------------------------*/
//Set text to diffrent sizes
/*-------------------------------------------------------------*/
function smallText() {
    document.getElementById('text').style.fontSize = "10px";
}
function mediumText() {
    document.getElementById('text').style.fontSize = "20px";
}
function bigText() {
    document.getElementById('text').style.fontSize = "30px";
}
/*-------------------------------------------------------------*/
//easteregg
function easteregg(){
    alert("You found easter egg! Have a great day! 😇 ~ Dawid Polowczyk");
}
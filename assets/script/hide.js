document.getElementById("reset").style.display="none";
document.getElementById("fortune").style.display="none";
if (location.search == "?0=1") {
    document.getElementById("reset").style.display="block";
    document.getElementById("coin").style.display="none";
    document.getElementById("fortune").style.display="block";
}
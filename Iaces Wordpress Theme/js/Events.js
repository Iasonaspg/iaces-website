var evlist = document.querySelectorAll(".event");
var j=0;
function show(){
    evlist[j].style.opacity = "1";
    j++;
}

time = setInterval(show, 700);

if (j == evlist.length){
    clearInterval(time);
}
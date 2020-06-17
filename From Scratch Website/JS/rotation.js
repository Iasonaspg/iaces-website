list = document.querySelectorAll(".fa-cog");
var i = 0;

function addC() {
    if (i == list.length) {
        i = 0;
    }
    if (i == 0) {
        list[i].classList.add("rot");
        list[list.length - 1].classList.remove("rot");
    }
    else {
        list[i].classList.add("rot");
        list[i-1].classList.remove("rot");
    }    
    i++;
}

setInterval(addC, 2000);
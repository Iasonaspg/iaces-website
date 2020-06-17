var a = document.querySelectorAll(".hover");
var b = document.querySelectorAll(".opa");

function change(i){
   a[i].src = a[i].src.split(".svg")[0] + "1.svg";
   for (var j=0; j<b.length; j++){
       if (j!=i){
           b[j].classList.add("opac");
       }
   }
   b[i].classList.add("scale");
}

function reset(i){
    a[i].src = a[i].src.split("1.svg")[0] + ".svg";
    for (var j=0; j<b.length; j++){
        if (j!=i){
            b[j].classList.remove("opac");
        }
    }
    b[i].classList.remove("scale");
}


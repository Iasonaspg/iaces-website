var linklist = document.querySelectorAll(".link");
var cont = document.querySelector(".menu-cont");
var flag = true;
var times = [".2s",".4s",".6s",".8s"];
function iconchange(){
    if (flag){
        cont.classList.add("X");
        flag = !flag;
        for (var i=0; i<linklist.length; i++){
            linklist[i].style.display = "block";
            linklist[i].style.animationDelay = times[i];
            linklist[i].classList.add("link2");
        }
    }
    else{
        cont.classList.remove("X");
        flag = !flag;
        for (var i=0; i<linklist.length; i++){
            linklist[i].style.display = "none";
            
        }
    }
}
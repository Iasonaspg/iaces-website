if (window.screen.width > 900){
    var slides = document.querySelectorAll(".slide");
    var counter = -1;
    var dots = document.querySelectorAll(".dot");
    
    //Clear all images
    function reset(){
        for (var i=0; i<slides.length; i++){
            slides[i].style.display = "none";
            dots[i].style.backgroundColor = "white";
        }
    }

    //Show next or previous image
    function startSlide(x){
        reset();
        if (x==1){
            counter++;
            if (counter == 3){
                counter = 0;
            }
            slides[counter].style.display = "block";
            dots[counter].style.backgroundColor = "rgb(17,150,135)"; 
        }
        else if (x==0){
            counter--;
            if (counter <= -1){
                counter = 2;
            }
            slides[counter].style.display = "block";
            dots[counter].style.backgroundColor = "rgb(17,150,135)"; 
        }
    }

    function autoPlay(){
        startSlide(1);
    }

    //Dot changer
    function currentSlide(y){
        reset();
        slides[y].style.display = "block";
        dots[y].style.backgroundColor = "rgb(17,150,135)";
        counter = y; 
    }
    
    //Initialize slideshow
    startSlide(1);
    //setInterval(autoPlay, 2000);
}
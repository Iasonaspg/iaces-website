$(".val1").focusout(function(){
    if (this.value == ""){
        $(".req1").css("visibility", "visible");
        $(".req1").css("color", "red");
        $(this).css("border-color", "red");
    }
});

$(".val1").keyup(function(){
    if (this.value != ""){
        $(".req1").css("visibility", "hidden");
        $(this).css("border-color", "black");
    }
});

$(".val2").focusout(function(){
    if (this.value == ""){
        $(".req2").css("visibility", "visible");
        $(".req2").css("color", "red");
        $(this).css("border-color", "red");
    }

    if (!(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(this.value)) && this.value != ""){
        $(".req2").css("display", "none");
        $(".invalmail").css("visibility", "visible");
        $(".invalmail").css("color", "red");
        $(this).css("border-color", "red");
    }
});

$(".val2").keyup(function(){
    if (this.value != ""){
        $(".req2").css("visibility", "hidden");
        $(this).css("border-color", "black");
    }

    if (/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(this.value)){
        $(".invalmail").css("visibility", "hidden");
        $(this).css("border-color", "black");
        $(".req2").css("display", "inline");
    }
});

$(".val3").focusout(function(){
    if (this.value == ""){
        $(".req3").css("visibility", "visible");
        $(".req3").css("color", "red");
        $(this).css("border-color", "red");
    }
});

$(".val3").keyup(function(){
    if (this.value != ""){
        $(".req3").css("visibility", "hidden");
        $(this).css("border-color", "black");
    }
});
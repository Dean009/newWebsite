$(document).ready(fadeIn);
    

function fadeIn(){
    $(".navbar").hide(0).delay(500).fadeIn(900);
}

//below doesn't work as intended
$(document).click(function(event) {
    var text = $(event.target).text();
});


function clicked(){
    text.css("fontSize", 300);
}

if (location.pathname == '/indexto.html'){
    $("div").addClass("active");   
}
//






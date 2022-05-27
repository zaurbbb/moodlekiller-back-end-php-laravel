alert("hello");
//just warning text
$( '#wText' ).html("Warning Message");

//warning message for gas in the grades
$(document).ready(function(){
    $('.gas').click(function(){
        pushUpMessage();
    });
});

//hover effects for subject buttons
$(document).ready(function(){
    $(".subj").hover(function(){
        $(this).css({"background-color": "#1177d1", "transition": "background-color 0.2s linear"});
    }, function(){
        $(this).css("background-color", "white");
    });
});

//hover effect for Cources text in the navbar
$( '.courses_text' ).css({"background-color": "#f8f9fa", "color": "black", "border": "1px solid #f8f9fa"});

$(document).ready(function(){
    $('.courses_text').hover(function(){
            $(this).css({"border-raduis": "100px", "border" : "1px solid #0d6efd", "background-color": "#0d6efd", "color":"white",
                "transition": " border-color 0.2s linear",
            });
        },
        function(){
            $(this).css({"background-color": "#f8f9fa", "color": "black", "border": "1px solid #f8f9fa", "border-raduis": "5px"});
        });
});


//click method for selecting fieldset
$(document).ready(function(){
    $("fieldset").mouseover(function(){
        $(this).css("border-color", "black");
    });
    $("fieldset").mouseout(function(){
        $(this).css("border-color", "#dee2e6");
    });
});

$(document).ready(function(){
    $("fff").mouseover(function(){
        $(this).css("border-color", "black");
    });
    $("fff").mouseout(function(){
        $(this).css("background-color", "#dee2e6");
    });
});

//for snackbar/toast
function pushUpMessage() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

    document.getElementById('sound').play();

}


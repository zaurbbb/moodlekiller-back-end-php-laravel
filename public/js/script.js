

//just warning text
$( '#wText' ).html("Warning Message");

//warning message for gas in the grades
$(document).ready(function(){
    $('.gas').click(function(){
        pushUpMessage();
    });
});



//for snackbar/toast
function pushUpMessage() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

    document.getElementById('sound').play();

}

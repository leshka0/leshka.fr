var audioElement1 = document.createElement('audio');
var audioElement2 = document.createElement('audio');
function initpass(){


    // SKROLL TO THE WORKS
        



        audioElement1.setAttribute('src', 'pics/access_denied/access_denied.mp3');
        audioElement2.setAttribute('src', 'pics/access_granted/access_granted.mp3');
        audioElement1.load()
        audioElement2.load()
 }   

function validateForm() {
    

    var x = document.forms["home_form"]["pass"].value;
    if (x == "lol") {
        $(".cripted").removeClass( "cripted" )
        audioElement2.play();
        $(".overlayText p").text("Access Granted!")

       var random = Math.floor((Math.random() * 37) + 1);
        console.log (random)
        var url = "pics/access_granted/yeah" 

        scrollto="works";
           var elem = $("#works");
           console.log("skroll to " + elem);
           $('html, body').animate({
              scrollTop: elem.offset().top
        }, 1200
        );
    }
    else {
        audioElement1.play();
        $(".overlayText p").text("Error : Access Denied")
        var random = Math.floor((Math.random() * 11) + 1);
        console.log (random)
        var url = "pics/access_denied/cat"
    }

    $("#access").attr("src", url + random + ".gif");
        $(".overlayText").removeClass( "vanishOverlay" )
        $(".introOverlay").removeClass( "vanishOverlayBG" )
        $(".overlayText").addClass( "appearoverlay" )
        $(".introOverlay").addClass( "appearoverlayBG" )
         return false;
    
}

function closeOverlay() {    
     $(".overlayText").removeClass( "appearoverlay" )
     $(".introOverlay").removeClass( "appearoverlayBG" )
     $(".overlayText").addClass( "vanishOverlay" )
     $(".introOverlay").addClass( "vanishOverlayBG" )
}

$( document ).ready(function() {
    initpass();
});
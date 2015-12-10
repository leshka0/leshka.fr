function artwork1(){

// symetry
$( ".home" ).append("<div class='top-left' style='position:absolute; top:0px; left:0px; width:50vw; height:50vh;' ></div>");
$( ".home" ).append("<div class='top-right' style='position:absolute; top:0px; right:0px; width:50vw; height:50vh;' ></div>");
$( ".home" ).append("<div class='bot-left' style='position:absolute; bottom:0px; left:0px; width:50vw; height:50vh;' ></div>");
$( ".home" ).append("<div class='bot-right' style='position:absolute; bottom:0px; right:0px; width:50vw; height:50vh;' ></div>");
// picture
$(".home").css({"background-image": "url('pics/painting.jpg')", "background-position": "0px -20px"});

$(".top-left").css({"background-image":  "url('pics/trump.jpg')", "background-position": "right bottom", });
$(".top-right").css({"background-image": "url('pics/trump.jpg')", "background-position": "left bottom",  });
$(".bot-left").css({"background-image":  "url('pics/trump.jpg')", "background-position": "right top",    });
$(".bot-right").css({"background-image": "url('pics/trump.jpg')", "background-position": "left top",     });

console.log($("#home"))

var currentx = 0;
var currenty = 0;
var current = null;

var positionTLx = 0;
var positionTLx = 0;
var positionTL = null;

var mousex = 0;
var mousey = 0;

//$( ".home" ).append("<img src='pics/crown.gif' style='width : 400px; position:absolute; left:calc(50% - 200px); top:calc(50vh - 200px);'/>");


$( ".home" ).mousemove(function( event ) {
    mousex = event.pageX;
    mousey = event.pageY;
});

setInterval(function(){ 
    
    var totalWidth  = $( window ).width();
    var totalHeight = $( window ).height();
    var differenceW = mousex-(totalWidth/2);
    var differenceH = mousey-(totalHeight/2);

    positionTLx= differenceW/10;
    positionTLy= differenceH/10;
    positionTL = positionTLx+"% " + positionTLy+"%";

    positionTRx= 100 - differenceW/10;
    positionTRy= differenceH/10;
    positionTR = positionTRx+"% " + positionTRy+"%";

    positionBLx= differenceW/10;
    positionBLy= 100 - differenceH/10;
    positionBL = positionBLx+"% " + positionBLy+"%";

    positionBRx= 100 - differenceW/10;
    positionBRy= 100 - differenceH/10;
    positionBR = positionBRx+"% " + positionBRy+"%";


    
$(".home").css({"background-position": current});
$(".top-left").css({"background-position": positionTL});
$(".top-right").css({"background-position": positionTR});
$(".bot-left").css({"background-position": positionBL});
$(".bot-right").css({"background-position": positionBR});


    }, 33);









};
$( document ).ready(function() {
    artwork1();
});
function artwork1(){

// symetry
$( ".home" ).append("<div class='symetry' style='position:absolute; top:30vh; width:100vw; height:39vh;' ></div>");
// picture
$(".home").css({"background-image": "url('pics/painting.jpg')", "background-position": "0px -20px"});
$(".symetry").css({"background-image": "url('pics/painting-invert.jpg')", "background-position": "0px -20px"});

console.log($("#home"))

var currentx = 0;
var currenty = 0;
var current = "lol";

var reversecurrentx = 0;
var reversecurrenty = 0;
var reversecurrent = "lol";

var mousex = 0;
var mousey = 0;

$( ".home" ).append("<img src='pics/crown.gif' style='width : 400px; position:absolute; left:calc(50% - 200px); top:calc(50vh - 200px);'/>");


$( ".home" ).mousemove(function( event ) {
    mousex = event.pageX;
    mousey = event.pageY;
});

setInterval(function(){ 
    
    var totalWidth = $( window ).width();
    var totalHeight = $( window ).height();
    var differenceW = mousex-(totalWidth/2);
    var differenceH = mousey-(totalHeight/2);

    currentx+=differenceW/95;
    currenty+=differenceH/95;
    current = currentx+"px " + currenty+"px";

    reversecurrentx-=differenceW/95;
    reversecurrenty-=differenceH/95;
    reversecurrent = reversecurrentx+"px " + reversecurrenty+"px";


    
$(".home").css({"background-position": current});
$(".symetry").css({"background-position": reversecurrent});


    }, 33);









};
$( document ).ready(function() {
    artwork1();
});
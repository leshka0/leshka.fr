<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>SHK(leShka) - PeanutButter</title>
  <meta name="description" content="Saturne">
  <meta name="author" content="le Shka">


  <link rel="stylesheet" href="css/projects.css">
  <link rel="stylesheet" href="css/skin.css">
  <link rel="stylesheet" href="css/work.css">
  <link rel="stylesheet" href="css/animations.css">

</head>
<body>

<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/animations.js"></script> 


<style type="text/css">
@font-face {
    font-family: "Montserrat";
    src: url(wtf/dance/Montserrat-Regular.ttf);
}


    .landing{
        position: fixed;
        top: 25%;
        left: 150px;
        right: 150px;
        z-index: 15;
        text-align: center;
        font-size: 4em;
        color: #1bbc9d;
        margin: auto;
        opacity: 1;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .colorful{
       font-family: "Montserrat";
       color: white;
       opacity: 0;
    }
    .home{
      background-position-x: 100px;
      background-position-y: 100px;
    }


</style>


<script type="text/javascript">
var page="wtf-lvl2";
</script>



<div class="home" style="position:absolute; left:0px; right:0px; top:0px; bottom:0px; background-color:black; background-image: url('wtf/dance/DanceSad.png');" > </div>


<audio style="opacity:0;" class="PeanutButter" controls preload="none"> 
  <source src="wtf/dance/PeanutButter.mp3" type="audio/mpeg">
</audio>

<div class="landing colorless">
 Oh no, the website is down.
</div>
<div class="landing colorful">
 But a new version is coming sOon !!
</div>

<script type="text/javascript">

var images = new Array()
function preload() {
	for (i = 0; i < preload.arguments.length; i++) {
		images[i] = new Image()
		images[i].src = preload.arguments[i]
	}
}
preload(
	"wtf/dance/Dance1Up.png",
	"wtf/dance/Dance2Up.png",
	"wtf/dance/Dance1Down.png",
	"wtf/dance/Dance2Down.png"
)

var audio = new Array()
function preloadAudio() {
  for (i = 0; i < preloadAudio.arguments.length; i++) {
    audio[i] = new Audio()
    audio[i].src = preloadAudio.arguments[i]
  }
}
preloadAudio(
  "wtf/dance/PeanutButter.mp3"
)





var color1 = "#FFFF00"
var color2 = "#FF00FF"
var color3 = "#00FFFF"
var color = 1
var click = false
var counter = "1"
var UpDown = "Up"
var LeftRight = "Left"
var bgPositionX = 0
var bgPositionY = 0

$( "body" ).click(function(event) {
  click = true;
  if (event.pageY > $( window ).height()/2){
  	UpDown = "Down"
  }
  else {UpDown = "Up"}
  
  if (event.pageX > $( window ).width()/2){
  	LeftRight = "Left"
  }
  else {LeftRight = "Right"}

  if (counter == "1") {
  		counter = "2"
  	}
  	else {counter = "1"}

  	//console.log (UpDown)
  	//console.log (LeftRight)
	//console.log (counter)

	if (LeftRight == "Right"){
	$(".home").css("-moz-transform", "scaleX(-1)");
    $(".home").css("-o-transform", "scaleX(-1)");
    $(".home").css("-webkit-transform", "scaleX(-1)");
    $(".home").css("transform", "scaleX(-1)");
    $(".home").css("filter", "FlipH");
    $(".home").css("-ms-filter", "FlipH");
    }
    else{
	$(".home").css("-moz-transform", "scaleX(1)");
    $(".home").css("-o-transform", "scaleX(1)");
    $(".home").css("-webkit-transform", "scaleX(1)");
    $(".home").css("transform", "scaleX(1)");
    $(".home").css("filter", "FlipH");
    $(".home").css("-ms-filter", "FlipH");
    }

});

$(".PeanutButter").trigger('pause');
$(".PeanutButter").trigger('play');


var interval;
function myFunction() {
    interval = setInterval(alertFunc, 175);
};
function alertFunc() {
	if (click == true) {
    $(".colorful").css("opacity","1");
    $(".colorless").css("opacity","0");
		color ++
		if (color>=4) {color = 1}
		if (color ==1) {
      $(".home").css("background-color",color1);
      $(".colorful").css("color",color2);
    }
		if (color ==2) {
      $(".home").css("background-color",color2);
      $(".colorful").css("color",color3);
    }
		if (color ==3) {
      $(".home").css("background-color",color3);
      $(".colorful").css("color",color1);
    }
    	$(".PeanutButter").trigger('play');
    	click = false

    	$(".home").css("background-image","url('wtf/dance/Dance"+counter+UpDown+".png')");
    	//else {$(".home").css("background-image","url('Dance2"+UpDown+".png')");}

    } else {
       $(".colorful").css("opacity","0");
       $(".colorless").css("opacity","1");
    	$(".home").css("background-color","black");
    	$(".home").css("background-image","url('wtf/dance/DanceSad.png')");
    	$(".PeanutButter").trigger('pause');
    }
};
myFunction();
$( "body" ).mousemove(function( event ) {
  bgPositionX = event.pageX
  bgPositionY = event.pageY
  
  $(".home").css("background-position-x", -event.pageX.toString() + "px");
   $(".home").css("background-position-y", -event.pageY.toString() + "px");
  console.log (event.pageX)

});

</script>


</body>

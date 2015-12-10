<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>SHK(leShka) - PeanutButter</title>
  <meta name="description" content="Saturne">
  <meta name="author" content="le Shka">


  <link rel="stylesheet" href="../../css/projects.css">
  <link rel="stylesheet" href="../../css/skin.css">
  <link rel="stylesheet" href="../../css/work.css">
  <link rel="stylesheet" href="../../css/animations.css">

</head>
<body>

<script src="../../js/jquery-2.1.3.min.js"></script>
<script src="../../js/parallax.js"></script>
<script src="../../js/animations.js"></script> 

<script type="text/javascript">
var page="wtf-lvl2";
</script>


  <?php
    include("../../pages/header.html");
?>


<div class="home" style="position:absolute; left:0px; right:0px; top:0px; bottom:0px; background-color:black; background-image: url('DanceSad.png');" > </div>


<script type="text/javascript">

var color1 = "#FFFF00"
var color2 = "#FF00FF"
var color3 = "#00FFFF"
var color = 1
var click = false
var counter = "1"
var UpDown = "Up"
var LeftRight = "Left"

$( ".home" ).click(function(event) {
  click = true;
  if (event.pageY > $( window ).height()/2){
  	UpDown = "Down"
  }
  else {UpDown = "Up"}
  
  if (event.pageX > $( window ).width()/2){
  	LeftRight = "Right"
  }
  else {LeftRight = "Left"}

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




var interval;
function myFunction() {
    interval = setInterval(alertFunc, 165);
};
function alertFunc() {
	if (click == true) {

		color ++
		if (color>=4) {color = 1}
		if (color ==1) {$(".home").css("background-color",color1);}
		if (color ==2) {$(".home").css("background-color",color2);}
		if (color ==3) {$(".home").css("background-color",color3);}
    	$(".PeanutButter").trigger('play');
    	click = false

    	$(".home").css("background-image","url('Dance"+counter+UpDown+".png')");
    	//else {$(".home").css("background-image","url('Dance2"+UpDown+".png')");}

    } else {

    	$(".home").css("background-color","black");
    	$(".home").css("background-image","url('DanceSad.png')");
    	$(".PeanutButter").trigger('pause');
    }



};
myFunction();
</script>

<audio style="opacity:0;" class="PeanutButter" controls preload="none"> 
	<source src="PeanutButter.mp3" type="audio/mpeg">
</audio>

<div class="sticky">
<div class="mask-reverse"><a href="javascript:history.back()" target="blank" class=" link"><span class="active gradient">&#11013; back to reality &#11013;</span></a></div>
</div>

</body>

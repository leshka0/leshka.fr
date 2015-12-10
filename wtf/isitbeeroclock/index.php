<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>SHK(leShka) - beer o'clock</title>
  <meta name="description" content="beer o'clock">
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
<style type="text/css">
@font-face {
    font-family: "Montserrat";
    src: url(Montserrat-Regular.ttf);
}


    body{
         font-family: "Montserrat", Arial-Black;
        font-size: 4em;
        color: #1bbc9d;
        background-color: #f1c40f;
        width: 50%;
        margin: auto;
        margin-top: 25vh;
    }
    .white{
        color: white !important;
    }
</style>
<script type="text/javascript">
var page="wtf-lvl2";
</script>


  <?php
    include("../../pages/header.html");
?>




<div id="time"></div>


<script type="text/javascript">
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function cheers(){
    var myQuotes = new Array();
    myQuotes[0] = "Santé !";
    myQuotes[1] = "Cheers!";
    myQuotes[2] = "Prost!";
    myQuotes[3] = "Noroc"
    var myRandom = Math.floor(Math.random()*myQuotes.length);

    document.getElementById('time').innerHTML = myQuotes[myRandom]
}

function startTime() {
    var today = new Date();
    var d = today.getDay();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);

    if (d==5) {
        if (h>=17) {
            if (m>=00 || h>17) {
            cheers();
            }

            else{document.getElementById('time').innerHTML = "In <span class='white' >" + (16-h) +"</span> hours and <br/><span class='white' >" + (60-m)+"</span> minutes "}
        }
        else{document.getElementById('time').innerHTML = "In <span class='white' >" + (16-h) +"</span> hours and <br/><span class='white' >" + (60-m)+"</span> minutes "}

    }
    else if (d==1){document.getElementById('time').innerHTML = "No, <br/>we <span class='white' >don't</span> drink <br/>on <span class='white' >Monday!</span>"}
    else if (d==7){document.getElementById('time').innerHTML = "It's <span class='white' >Sunday</span>,<br/> there is <span class='white' >no rule</span>... Cheers !"}
    else {
        if (h>=19) {
            if (m>=00 || h>19) {
            cheers();
            }
            else{document.getElementById('time').innerHTML = "In <span class='white' >" + (18-h) +"</span> hours and <br/><span class='white' >" + (60-m)+"</span> minutes "}
        }
        else{document.getElementById('time').innerHTML = "In <span class='white' >" + (18-h) +"</span> hours and <br/><span class='white' >" + (60-m)+"</span> minutes "}
    }

    //document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    t = setTimeout(function () {
        startTime()
    }, 500);
}
startTime();
</script>
<div class="sticky">
<div class="mask-reverse"><a href="javascript:history.back()" target="blank" class=" link"><span class="active gradient">&#11013; back to reality &#11013;</span></a></div>
</div>
</body>
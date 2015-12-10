<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>SHK(leShka)</title>
  <meta name="description" content="SHK(le Shka) Designer / Artist based in london">
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
<script src="js/cursor.js"></script>
<script src="js/password.js"></script>
<!--<script src="artworks/01_infinity/infinity.js"></script>--> 
<script>
var page="home";
</script>
<div class="introOverlay" onclick="closeOverlay()">
<div class="overlayText"> <p>Error : Access Denied</p>
<img id="access" src="pics/access_denied/cat1.gif">
</div>
</div>
  <?php
    include("pages/header.html");
?>
<div class="introText">
    Thanks for visiting, you may have received a password<br/>
    to unlock hidden projects<br/>
    It’s now time for you to use your hacking skills :

<form name="home_form" method="POST" action="js/password.js" onsubmit="return validateForm()">
<input class="introPass" placeholder="Chicken" onfocus="this.placeholder = ''" type="text" name="pass" size="15" />
 </form>
  </div>
  

<?php
    include("pages/home.php");
?>
  
  <div id="works">
  <a href="#works"></a>

   
  	
  


  <div class="quote clip jagermeister parallax cripted" skroll="jagermeister" data-img-width="1500" data-img-height="800" data-diff="-300">
     <div class="maskhidden jagermeister parallax" name="jagermeister"></div>
      <div class="text">
      Funny<br/>is usually not<br/>healthy.
    </div>
    <a href="projets/jagermeister">
      <span class="title title-jagermeister">Jägermeister<span class="tag">| Following the brand for 2 years 14|15</span></span> 
    </a>
  </div><br>

  <div class="quote clip i-remember parallax" skroll="i-remember" data-img-width="1500" data-img-height="800" data-diff="-300">
     <div class="maskhidden i-remember parallax" name="i-remember"></div>
      <div class="text">
      Never forget the best, never forget the worst.
    </div>
    <a href="projets/i-remember">
      <span class="title title-i-remember">I remember<span class="tag">| Digital walk 14</span></span> 
    </a>
  </div><br>

  <div class="quote clip hogan parallax" skroll="hogan" data-img-width="1500" data-img-height="800" data-diff="-300">
     <div class="maskhidden hogan parallax" name="hogan"></div>
      <div class="text">
      Apparently,<br/>beige is the new black.
    </div>
    <a href="projets/hogan">
      <span class="title title-hogan">Hogan<span class="tag">| Web Contents 14|15</span></span> 
    </a>
  </div><br>

  <div class="quote clip nespresso parallax" skroll="nespresso" data-img-width="1500" data-img-height="800" data-diff="-300">
     <div class="maskhidden nespresso parallax" name="nespresso"></div>
      <div class="text">
      George never signed for the USA.
    </div>
    <a href="projets/nespresso">
      <span class="title title-nespresso">Nespresso<span class="tag">| Following the brand for 2 years 12|13</span></span> 
    </a>
  </div><br>

<div class="quote clip july parallax" skroll="july" data-img-width="1500" data-img-height="800" data-diff="-300">
     <div class="maskhidden july parallax " name="july"></div>
      <div class="text">
      A sucessful<br/>Drive-to-store Mobile System.
    </div>
    <a href="projets/july">
      <span class="title title-july">03 July<span class="tag">| Startup 14</span></span> 
    </a>
  </div><br>  

  

<div class="small_container">

<div class="divider-line"></div>
<div class="titled-separator">Projects</div>

<div class="column">

<a href="projets/jagermeister" class="cripted" >
<p><img src="projets/jagermeister/jager_thumb.jpg"/>
<span class="grid-title">Jägermeister<br/><span class="details">Following the brand for 2 years 14 | 15 </span></span></p>
</a>

<a href="projets/hungrynow">
<p ><img src="projets/hungrynow/hungry-now_thumb.jpg"/>
<span class="grid-title">Hungry Now !<br/><span class="details">mobile App for 03July | 13 </span></span></p>
</a>

<a href="projets/july">
<p ><img src="projets/july/pics/03july_profile.jpg"/>
<span class="grid-title">03 july<br/><span class="details">StartUp Compagny 13 | 14 </span></span></p>
</a>

<a href="projets/hogan">
<p><img src="projets/hogan/hogan_thumb.jpg"/>
<span class="grid-title">Hogan<br/><span class="details">Web Contents 14 | 15 </span></span></p>
</a>

<a href="projets/stratoquest">
<p><img src="projets/stratoquest/stratoquest_thumb.jpg"/>
<span class="grid-title">stratoquest<br/><span class="details">Webdesign for Wekstat | 13 </span></span></p>
</a>

<a href="projets/domyos">
<p><img src="projets/domyos/domyos_thumb.jpg"/>
<span class="grid-title">Domyos<br/><span class="details">Film & Motion for Wekstat | 13 </span></span></p>
</a>

<a href="projets/gameofthrones" >
<p><img src="projets/gameofthrones/gameofthrones_thumb.jpg"/>
<span class="grid-title">The game of thrones<br/><span class="details">Website for Orange Cinemaseries | 11 </span></span></p>
</a>
</div>


<div class="column">

<a href="projets/gasoilnow" >
<p ><img src="projets/gasoilnow/gasoil-now_thumb.jpg"/>
<span class="grid-title">Gas Now !<br/><span class="details">mobile App for 03July | 13 </span></span></p>
</a>

<a href="projets/nespresso" >
<p ><img src="projets/nespresso/nespresso_thumb.jpg"/>
<span class="grid-title">Nespresso<br/><span class="details">Folowing the brand 12 | 14 </span></span></p>
</a>

<a href="projets/dior_addict" >
<p ><img src="projets/dior_addict/dior-addict_thumb.jpg"/>
<span class="grid-title">Dior Addict<br/><span class="details">website for Dior | 14 </span></span></p>
</a>

<a href="projets/plan" >
<p ><img src="projets/plan/plan_thumb.jpg"/>
<span class="grid-title">The erasable wall<br/><span class="details">collaborative experiment for werkstatt | 13 </span></span></p>
</a>

<a href="projets/kenzo_men">
<p><img src="projets/kenzo_men/kenzo_thumb.jpg"/>
<span class="grid-title">Kenzo Homme Night<br/><span class="details">Viral videos for Wekstatt | 13 </span></span></p>
</a>

<a href="projets/cutback">
<p><img src="projets/_old/thumbs/cutback.jpg"/>
<span class="grid-title">Cutback<br/><span class="details">Website for Wekstatt | 12 </span></span></p>
</a>

</div>

<div class="column">

<a href="projets/cashnow" >
<p ><img src="projets/cashnow/cash-now_thumb.jpg"/>
<span class="grid-title">Cash Now !<br/><span class="details">Mobile App for 03July | 13 </span></span></p>
</a>

<a href="projets/i-remember" >
<p ><img src="projets/i-remember/i-remember_thumb.jpg"/>
<span class="grid-title">I remember<br/><span class="details">Digital Walk | 14 </span></span></p>
</a>

<a href="projets/onl" >
<p ><img src="projets/onl/onl_thumb.jpg"/>
<span class="grid-title">Jeremy Schneider<br/>- for -<br/>Orchestre National de Loraine<br/><span class="details">Film | 13 </span></span></p>
</a>

<a href="projets/petitpaume" >
<p><img src="projets/petitpaume/petitpaume_thumb.jpg"/>
<span class="grid-title">le Petit Paume<br/><span class="details">Film for le Petit Paume | 11 </span></span></p>
</a>

</div>



</div>
</div>

<div class="small_container">

<?php
    include("pages/footer.html");
?>
</div>






  

</body>
</html>
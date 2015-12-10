function initSeq(){
  $(".sequence").each(function( index ){
    var elmt = $(this);
    var largeur = elmt.width();
    var taille = (elmt.children('img').size() / elmt.size());
    var speed = (elmt.attr('speed'));
    var timeline = new Boolean(false);
    timeline = (elmt.attr('timeline'));
    imageToDisplay = 0;
    console.log (taille);
    console.log ("TIMELINE = "+timeline)
    
    console.log ("TIMELINE = "+timeline)
    if ( speed === "undefined") {
      speed = 10;
    }
    
    var counter=0;
    var delay=0;
    var delayMax=speed;
    elmt.children("img:eq("+counter+")").addClass("lol");
    
    if (timeline){
    
      elmt.mousemove(function( event ) { playTimeline(elmt,event) });
    
    }
    else{
    
      elmt.mousemove(function( event ) { switchSequence(elmt) });
    
        }
   
    
    function playTimeline(elmt,event){
      
      //console.log ("largeur = "+largeur);
     

      var offset = elmt.offset();
      var positionRelative = (event.pageX-offset.left)/largeur;
     elmt.children("img:eq("+imageToDisplay+")").removeClass("lol");
      imageToDisplay =  Math.round( positionRelative*taille)-1;
      if (imageToDisplay<0){
        imageToDisplay=0;
      }
      //console.log ("x = "+imageToDisplay);
      
          elmt.children("img:eq("+imageToDisplay+")").addClass("lol");
    }
     function switchSequence(elmt){
      elmt.children("img:eq("+counter+")").removeClass("lol");
          delay++;
          if (delay>=delayMax) {
          counter++;
          delay=0;
          };
          if (counter > taille-1){
            counter=0;
          }
          //console.log(counter);
          elmt.children("img:eq("+counter+")").addClass("lol");
    }
    
    
  });

};


$( document ).ready(function() {
    initSeq();
});
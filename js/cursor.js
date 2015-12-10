function initCursor(){
var count = 1;

setInterval(changecursor, 50);

    function changecursor(elmt,event){
      if (count==12){
      count=1
      }
      if (count==1){
      $(".quote .text").css( "cursor", "pointer" )
      $(".quote a").css( "cursor", "pointer" )
      }
      else if (count==2){
      $(".quote .text").css( "cursor", "cell" )
      $(".quote a").css( "cursor", "cell" )
      }
      else if (count==3){
      $(".quote .text").css( "cursor", "all-scroll" )
      $(".quote a").css( "cursor", "all-scroll" )
      }
      else if (count==4){
      $(".quote .text").css( "cursor", "crosshair" )
      $(".quote a").css( "cursor", "crosshair" )
      }
      else if (count==5){
      $(".quote .text").css( "cursor", "help" )
      $(".quote a").css( "cursor", "help" )
      }
      else if (count==6){
      $(".quote .text").css( "cursor", "ne-resize" )
      $(".quote a").css( "cursor", "ne-resize" )
      }
      else if (count==7){
      $(".quote .text").css( "cursor", "no-drop" )
      $(".quote a").css( "cursor", "no-drop" )
      }
      else if (count==8){
      $(".quote .text").css( "cursor", "progress" )
      $(".quote a").css( "cursor", "progress" )
      }
      else if (count==9){
      $(".quote .text").css( "cursor", "wait" )
      $(".quote a").css( "cursor", "wait" )
      }
      else if (count==10){
      $(".quote .text").css( "cursor", "zoom-in" )
      $(".quote a").css( "cursor", "zoom-in" )
      }
      else if (count==11){
      $(".quote .text").css( "cursor", "not-allowed" )
      $(".quote a").css( "cursor", "not-allowed" )
      }
      count++

    }

}


$( document ).ready(function() {
    initCursor();
});


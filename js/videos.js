function initvideos(){



  $( "video" ).each(function( index ) {
    if (!$( this).prop("autoplay")) {
      $(this).mouseover(function() {
        //console.log( index + ": " + $( this ) );
        $( this ).get(0).play();
      });
      $(this).mouseout(function() {
        //console.log( "OUT" );
        $( this ).get(0).pause();
      });
    };
  });





};


$( document ).ready(function() {
    initvideos();
});
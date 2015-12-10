 $('html').addClass('js');
function initanim(){


 // scroll handler
  var scrollToAnchor = function( id,aktive ) {
 
    // grab the element to scroll to based on the name
    var elem = $("div[name='"+ id +"']");
    var elemtovanish = $(".text[skroll='"+ id +"']");
 
    // if that didn't work, look for an element with our ID
    if ( typeof( elem.offset() ) === "undefined" ) {
      elem = $("#"+id);
    }
 
    // if the destination element exists
    if ( typeof( elem.offset() ) !== "undefined" ) {
 
      // do the scroll
      $('html, body').animate({
              scrollTop: elem.offset().top
      }, 400, unmask(elem, elemtovanish, id) );
 
    }
  };
 
  // bind to click event
  $(".quote .text").click(function( event ) {
      // cancel default event propagation
      event.preventDefault();
      // scroll to the location
      var href = $(this).parent().find("a").attr('href').replace('projets/', '')
      scrollToAnchor( href, $(this).parent() );
  }); 

  $(".quote a").click(function( event ) {
      // cancel default event propagation
      event.preventDefault();
      // scroll to the location
      var href = $(this).parent().find("a").attr('href').replace('projets/', '')
      scrollToAnchor( href, $(this).parent() );
  }); 

  $(".column a").click(function( event ) {
    // only do this if it's an anchor link
    if ( $(this).attr("href").match("projets/") ) {
      // cancel default event propagation
      event.preventDefault();
      // scroll to the location
      var href = $(this).attr('href').replace('projets/', '')
      

    // grab the element to scroll to based on the name
    var elem = $("div[name='"+ href +"']");
    var elemtovanish = $(".quote[skroll='"+ href +"']");
 
    // if that didn't work, look for an element with our ID
    if ( typeof( elem.offset() ) === "undefined" ) {
      elem = $("#"+href);
    }
    t=setTimeout(function() {changepage(href)},1400)
    $(".quote").each(function(index, element) {
      $( this ).addClass( "vanish" );
  });
    $("img").each(function(index, element) {
      $( this ).addClass( "vanish" );
  });
    }
  });      


  $(".navigation a").click(function( event ) {
    // only do this if it's an anchor link
    if ( $(this).attr("href").match("#") ) {
      // cancel default event propagation
      event.preventDefault();
      // scroll to the location
      var href = $(this).attr('href').replace('#', '')
      
    t=setTimeout(function() {changepage(href)},1400)
    $("div").each(function(index, element) {
      $( this ).addClass( "vanish" );
  });
    $("iframe").each(function(index, element) {
      $( this ).addClass( "vanish" );
  });
    }
  });      




};

function unmask(elem,elemtovanish,id){
  //unmask the title
  elem.addClass( "unmask" );
  //Disapear the others
  t=setTimeout(function() {changepage(id)},1400)
  $("img").not($(".header")).addClass( "vanish" );
  $(".text").each(function(index, element) {
    if ($(this).parent().attr('skroll')!=id){
      $(this).parent().addClass( "vanish" );
    }
  });
};

function changepage(id){
  var url = "http://www.leshka.fr";
  console.log(page +"LAPAGE")
  if (page=="home" || page=="work"){
  url = url + "/projets/" + id ;
  }
  else if (page=="art") {
    url = url + "/art/" + id ;
  }
  else if (page=="wtf") {
    url = url + "/wtf/" + id ;
  }
  else if (page=="kollection") {
    url = url + "/kollection/" + id ;
  }
  else if (page=="work-lvl2" || page=="art-lvl2") {
    url = url + "/#" + id ;
  }
  
  window.location = url;

};

$( document ).ready(function() {
    initanim();
});
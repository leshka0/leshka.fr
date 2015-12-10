function inikowboys(){


$( ".kowboy" ).each(function() {
  console.log( $( this ).attr('id') );
  var object = $( this );
  var dir = "pics/" + $( this ).attr('id');
  var fileextension=".jpg";
  var pictures_number_max =0;
  var pictures_number =0;
  var slide_interval = null;
  $.ajax({
            url: dir,
            success: function (data) {
              $(data).find("a:contains(" + fileextension + ")").each(function () {
                var filename = this.href.replace(window.location.host, "").replace("http:///","").replace("kowboys",""); 
                pictures_number_max ++;
              });
            }
        });

var slide = function(){ 
      if (pictures_number<pictures_number_max) {
          pictures_number ++;
      }
      else{
        pictures_number = 1;
      }
    object.attr("src",dir + "/" + pictures_number + fileextension);
};
var setSlide = function () {
  slide_interval = setInterval(slide, 230);
}
var stopSlide = function (){
  clearInterval(slide_interval);
}


  $( this ).mouseenter(function() {
    pictures_number = 1;
    object.attr("src",dir + "/" + pictures_number + fileextension);
    setSlide ()
  });

  $( this ).mouseleave(function() {
    stopSlide();
    object.attr("src","pics/" + object.attr('id') + ".jpg");
  });
});

//$("#claire_paq").attr("src","pics/claire_paq/2.jpg");


};
$( document ).ready(function() {
    inikowboys();
});
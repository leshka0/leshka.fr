function initawards(){
var taille = $(".glorylist").children('li').size();
$(".glory").css("width", 122*taille+"px");
var margin = 0;
var counter=1;
if (taille>1){
    window.setInterval(function(){
      counter++;
      margin -=25;
      if (counter > taille){
        margin=0;
        counter=1;
      }
      $(".glorylist").css("margin-top", margin+"px");
    }, 2000);
    
}




};


$( document ).ready(function() {
    initawards();
});
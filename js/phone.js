function initPhone(){
var taille = ($(".phonelist").children('img').size() / $(".phonelist").size());
console.log ("PHONE SEQUENCE SIZE : " + taille)
var margin = 0;
var counter=1;
if (taille>1){
    window.setInterval(function(){
      counter++;
      margin -=100;
      if (counter > taille){
        margin=0;
        counter=1;
      }
      $(".phonelist").css("margin-left", margin+"%");
    }, 2000);
    
}




};


$( document ).ready(function() {
    initPhone();
});
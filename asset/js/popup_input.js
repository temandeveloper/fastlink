$("button").click(function(){
  $(".bg-blur").fadeIn(500);
});
$(".btm-submit").click(function(){
  $(".bg-blur").fadeOut(500);
});
$(".close").click(function(){
  $(".bg-blur").fadeOut(500);
});
$(".btm-cari").click(function(){
  $("#pilihan").fadeOut(1000);
});
$("#logout").click(function(){
  $(".popup_logout").fadeIn(100);
});

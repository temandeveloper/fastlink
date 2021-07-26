$(".btm-fadeout").click(function(){
  $(".popuplogin").fadeIn(500);
});
$(".close").click(function(){
  $(".popuplogin").fadeOut(500);
});
$(".btm-fadeout").click(function(){
  $("#popup-form").show(500);
});
$(".close").click(function(){
  $("#popup-form").hide(500);
});
$("#logout").click(function (){
  $(".popup_logout").fadeIn(100);
});
$("#popup_close").click(function (){
  $(".popup_logout").fadeOut(300);
});


$(window).on('scroll',function(){
  if ($(window).scrollTop()) {
    $('header').addClass('aktif');
  }
  else {
    $('header').removeClass('aktif');
  }
})

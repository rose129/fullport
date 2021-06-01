

$(function() {

  var oriLogo = $(".navbar-brand img").attr('src'); //오리지널 로고 이미지 경로 저장
  var scrollLogo = $(".navbar-brand img").data('scrolllogo'); //스크롤시 로고 이미지 경로 저장


  $(window).scroll(function(){

    if($(window).scrollTop() > 0){
      $("body").addClass("scroll");
      $(".navbar-brand img").attr('src',scrollLogo);

    }else{
      $("body").removeClass("scroll");
      $(".navbar-brand img").attr('scrolllogo',oriLogo);
    }
  });



});

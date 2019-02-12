jQuery(function ($) {

  $(function () {
    var topBtn = $('#page-top');
    topBtn.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 500) {
        topBtn.fadeIn();
      } else {
        topBtn.fadeOut();
      }
    });
    topBtn.click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
    });
  });
});

jQuery(function ($) {
  $(function () {
    $('a[href^="#"]').click(function () {
      var speed = 600;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({
        scrollTop: position
      }, speed, "swing");
      return false;
    });
  });
});
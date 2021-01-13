$(function () {
  var all_classes = "";
  var timer = undefined;
  $.each($('li', '.social-class'), function (index, element) {
    all_classes += " btn-color-" + $(element).data("code") + " btn-outline-color-" + $(element).data("code");
  });

  $('li', '.social-class').mouseenter(function () {

    var icon_name = $(this).data("code");
    if ($(this).data("icon"))
      icon_name = $(this).data("icon");

    var icon = "<span class='fab fa-" + icon_name + "'></span>";
    $('.btn-social', '.social-sizes').html(icon + "Sign in with " + $(this).data("name"));
    $('.btn-social-icon', '.social-sizes').html(icon);
    $('.btn-color-*', '.social-sizes').removeClass(all_classes);
    $('.btn-color-*', '.social-sizes').addClass("btn-color-" + $(this).data('code'));
    $('.btn-outline-color-*', '.social-sizes').removeClass(all_classes);
    $('.btn-outline-color-*', '.social-sizes').addClass("btn-outline-color-" + $(this).data('code'));
  });
  $($('li', '.social-class')[Math.floor($('li', '.social-class').length * Math.random())]).mouseenter();
});

// var isUp = false;
// $('#show-more').click(function () {

//   if (!isUp) {
//     $('#more').slideDown('slow');
//     $('#show-more').html("<i class='fa-fw fas fa-chevron-circle-up'></i>");

//   } else {

//     $('#more').slideUp('slow');
//     $('#show-more').html("<i class='fa-fw fas fa-chevron-circle-down'></i>");
//   }

//   isUp = !isUp;
// });

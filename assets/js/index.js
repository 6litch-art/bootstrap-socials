jQuery.expr[':'].regex = function (elem, index, match) {
  var matchParams = match[3].split(','),
    validLabels = /^(data|css):/,
    attr = {
      method: matchParams[0].match(validLabels) ?
        matchParams[0].split(':')[0] : 'attr',
      property: matchParams.shift().replace(validLabels, '')
    },
    regexFlags = 'ig',
    regex = new RegExp(matchParams.join('').replace(/^\s+|\s+$/g, ''), regexFlags);
  return regex.test(jQuery(elem)[attr.method](attr.property));
}

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

    console.log($('.btn-color-*', '.social-sizes'));

    var icon = "<span class='fab fa-" + icon_name + "'></span>";
    $('.btn-social', '.social-sizes').html(icon + "Sign in with " + $(this).data("name"));
    $('.btn-social-icon', '.social-sizes').html(icon);

    var btnColor = $('button:regex(class, btn-color.*)', '.social-sizes');
    btnColor.removeClass(all_classes);
    btnColor.addClass("btn-color-" + $(this).data('code'));

    var btnOutlineColor = $('button:regex(class, btn-outline-color.*)', '.social-sizes');
    btnOutlineColor.removeClass(all_classes);
    btnOutlineColor.addClass("btn-outline-color-" + $(this).data('code'));
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
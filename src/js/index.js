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
  $.each($('li', '.social-class2'), function (index, element) {
    all_classes += " btn-color-" + $(element).data("code") + " btn-outline-color-" + $(element).data("code");
  });

  $('li', '.social-class2').click(function () {

    var icon_name = $(this).data("code");
    if ($(this).data("icon"))
      icon_name = $(this).data("icon");

    var icon = "<i class='" + icon_name + "'></i>";
    $('.btn-changeHTML', '.social-sizes2').html(icon + "Sign in with " + $(this).data("name"));
    $('.btn-changeHTML-icon', '.social-sizes2').html(icon);

    var btnColor = $('button:regex(class, btn-color.*)', '.social-sizes2');
    btnColor.removeClass(all_classes);
    btnColor.addClass("btn-color-" + $(this).data('code'));

    var btnOutlineColor = $('button:regex(class, btn-outline-color.*)', '.social-sizes2');
    btnOutlineColor.removeClass(all_classes);
    btnOutlineColor.addClass("btn-outline-color-" + $(this).data('code'));
  });
  $($('li', '.social-class2')[Math.floor($('li', '.social-class2').length * Math.random())]).mouseenter();
});


$(function () {
  var all_classes = "";
  var timer = undefined;
  $.each($('li', '.social-class1'), function (index, element) {
    all_classes += " btn-color-" + $(element).data("code") + " btn-outline-color-" + $(element).data("code");
  });

  $('li', '.social-class1').click(function () {

    var icon_name = $(this).data("code");
    if ($(this).data("icon"))
      icon_name = $(this).data("icon");

    var icon = "<i class='" + icon_name + "'></i>";
    $('.btn-changeHTML', '.social-sizes1').html(icon + "Sign in with " + $(this).data("name"));
    $('.btn-changeHTML-icon', '.social-sizes1').html(icon);

    var btnColor = $('button:regex(class, btn-color.*)', '.social-sizes1');
    btnColor.removeClass(all_classes);
    btnColor.addClass("btn-color-" + $(this).data('code'));

    var btnOutlineColor = $('button:regex(class, btn-outline-color.*)', '.social-sizes1');
    btnOutlineColor.removeClass(all_classes);
    btnOutlineColor.addClass("btn-outline-color-" + $(this).data('code'));
  });
  $($('li', '.social-class1')[Math.floor($('li', '.social-class1').length * Math.random())]).mouseenter();
});


$(function () {
  var all_classes = "";
  var timer = undefined;
  $.each($('li', '.social-class3'), function (index, element) {
    all_classes += " btn-color-" + $(element).data("code") + " btn-outline-color-" + $(element).data("code");
  });

  $('li', '.social-class3').click(function () {

    var icon_name = $(this).data("code");
    if ($(this).data("icon"))
      icon_name = $(this).data("icon");

    var icon = "<i class='" + icon_name + "'></i>";
    $('.btn-changeHTML', '.social-sizes3').html(icon + "Sign in with " + $(this).data("name"));
    $('.btn-changeHTML-icon', '.social-sizes3').html(icon);

    var btnColor = $('button:regex(class, btn-color.*)', '.social-sizes3');
    btnColor.removeClass(all_classes);
    btnColor.addClass("btn-color-" + $(this).data('code'));

    var btnOutlineColor = $('button:regex(class, btn-outline-color.*)', '.social-sizes3');
    btnOutlineColor.removeClass(all_classes);
    btnOutlineColor.addClass("btn-outline-color-" + $(this).data('code'));
  });
  $($('li', '.social-class3')[Math.floor($('li', '.social-class3').length * Math.random())]).mouseenter();
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

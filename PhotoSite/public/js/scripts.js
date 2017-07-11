$(function(){
var $item = $('.carousel .item');
var $wHeight = $(window).height();
$item.height($wHeight);

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')'
  });
  $(this).remove();
});

$(window).on('resize', function (){
  $wHeight = $(window).height();
  $item.height($wHeight);
});

$('#column-1').isotope({
  itemSelector: '.gallery-image-container',
  masonry: {
    columnWidth: '.gallery-image-container'
  }
});

$('#column-1').imagesLoaded( function() {
  $('#column-1').isotope('layout');
});

$('#welcome-carousel').imagesLoaded( function() {
  $('#welcome-container').addClass('ready');
});

var v = $(".gallery-image-container"), cur = 0;
for(var j, x, i = v.length; i; j = parseInt(Math.random() * i), x = v[--i], v[i] = v[j], v[j] = x);

function fadeIn() {
  v.eq(cur++).addClass('active');
  if(cur != v.length) setTimeout(fadeIn, 50);
}

$('#gallery-container').imagesLoaded( function() {
  fadeIn();
});

});

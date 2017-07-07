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

function getRandom() {
  return Math.floor((Math.random()*100) + 1);
};

var $imageCount = $('.gallery-image-container').length;

if (!$('.gallery-image-container').hasClass('active')) {
  
}

});

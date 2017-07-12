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

// GALLERY ISOTOPE PLUGIN FOR RESPONSIVE DISPLAY
$('#column-1').isotope({
  itemSelector: '.gallery-image-container',
  masonry: {
    columnWidth: '.gallery-image-container'
  }
});

$('#column-1').imagesLoaded( function() {
  $('#column-1').isotope('layout');
});

// LOAD HOMEPAGE IMAGES BEFORE DISPLAY
$('#welcome-carousel').imagesLoaded( function() {
  $('#welcome-container').addClass('ready');
});

// GALLERY RANDOM FADE IN
var v = $(".gallery-image-container"), cur = 0;
for(var j, x, i = v.length; i; j = parseInt(Math.random() * i), x = v[--i], v[i] = v[j], v[j] = x);

function fadeIn() {
  v.eq(cur++).addClass('active');
  if(cur != v.length) setTimeout(fadeIn, 50);
}

$('#gallery-container').imagesLoaded( function() {
  fadeIn();
});

// IFRAME API
// function onPlayerReady(event) {
//     event.target.setPlaybackQuality('hd1080');
// }
// function onPlayerStateChange(event) {
//     if (event.data == YT.PlayerState.BUFFERING) {
//         event.target.setPlaybackQuality('hd720');
//     }
// }

});

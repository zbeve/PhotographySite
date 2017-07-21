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
$('#grid').isotope({
  itemSelector: '.gallery-image-container',
  layoutMode: 'masonry',
  masonry: {
    isFitWidth: true,
    // columnWidth: '.gallery-image-container'
  }
});

$('#column-1').imagesLoaded( function() {
  $('#grid').isotope('layout');
});

// GRAPHICS PAGE ISOTOPE
$('#graphics-grid').isotope({
  itemSelector: '.graphics-image-container',
  layoutMode: 'masonry',
  masonry: {
    isFitWidth: true,
    columnWidth: '.graphics-image-container'
  }
});

$('#g-column-1').imagesLoaded( function() {
  $('#grphics-grid').isotope('layout');
});

// LOAD HOMEPAGE IMAGES BEFORE DISPLAY
$('#welcome-carousel').imagesLoaded( function() {
  $('#welcome-container').addClass('ready');
});

// GALLERY RANDOM FADE IN
var v = $('.gallery-image-container'), cur = 0;
for(var j, x, i = v.length; i; j = parseInt(Math.random() * i), x = v[--i], v[i] = v[j], v[j] = x);

function fadeIn() {
  v.eq(cur++).addClass('active');
  if(cur != v.length) setTimeout(fadeIn, 50);
}

$('#gallery-container').imagesLoaded( function() {
  fadeIn();
});

// GRAPHICS RANDOM FADE IN
var g = $('.graphics-image-container'), curr = 0;
for(var q, p, t = g.length; t; q = parseInt(Math.random() * t), p = g[--t], g[t] = g[q], g[q] = p);

function fadeInGra() {
  g.eq(curr++).addClass('active');
  if(curr != g.length) setTimeout(fadeInGra, 300);
}

$('#graphics-container').imagesLoaded( function() {
  fadeInGra();
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

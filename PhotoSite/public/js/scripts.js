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
$('.visible').imagesLoaded( function() {
  $('#grid').isotope({
    itemSelector: '.gallery-image-container',
    layoutMode: 'masonry',
    masonry: {
      isFitWidth: true,
    }
  });
});

// GRAPHICS PAGE ISOTOPE
$('.visible').imagesLoaded( function() {
  $('#graphics-grid').isotope({
    itemSelector: '.graphics-image-container',
    layoutMode: 'masonry',
    masonry: {
      isFitWidth: true,
    }
  });
});

// LOAD HOMEPAGE IMAGES BEFORE DISPLAY
$('#welcome-carousel').imagesLoaded( function() {
  $('#welcome-container').addClass('ready');
});

// RANDOM FADE IN
var v = $('.visible'), cur = 0;
for(var j, x, i = v.length; i; j = parseInt(Math.random() * i), x = v[--i], v[i] = v[j], v[j] = x);

function fadeIn() {
  v.eq(cur++).addClass('active');
  if(cur != v.length) setTimeout(fadeIn, 150);
}

$('.visible').imagesLoaded( function() {
  fadeIn();
});


$('#social-feed').slick({
  dots: true,
  arrows: true,
  infinite: true,
  speed: 2000,
  centerMode: true,
  variableWidth: true,
  centerPadding: '60px',
  slidesToShow: 3,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 961,
      settings: {
        arrows: false,
        dots: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


});

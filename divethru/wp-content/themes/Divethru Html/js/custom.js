$(".slick-slider").slick({
   slidesToShow: 1.5,
   dots: true,
   loop:true,
   arrow:true,
   prevArrow: '<button class="slide-arrow prev-arrow"></button>',
   nextArrow: '<button class="slide-arrow next-arrow"></button>',
   infinite:false,
   slidesToScroll: 1,
   autoplay: false,
   autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,        
        slidesToScroll: 1,
        arrow:false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    
     // dots: true, Boolean
    // arrows: false, Boolean
  });


////////////////////////////////////////////////////////


var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

////////////////////////////////////////////////////////////////

$(".slick-slider2").slick({
   slidesToShow: 3,
    dots: true,
    arrow:true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    loop: true,
   infinite:true,
   slidesToScroll: 1,
   autoplay: false,
   autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    
     // dots: true, Boolean
    // arrows: false, Boolean
  });




///////////////////////////////////////////////////////////


$(".slick-slider3").slick({
   slidesToShow: 2,
    dots: true,
    arrow:true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    loop: true,
   infinite:true,
   slidesToScroll: 1,
   autoplay: false,
   autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    
     // dots: true, Boolean
    // arrows: false, Boolean
  });





///////////////////////////////////////////////////////////


$(".slick-slider4").slick({
   dots: true,
   loop: true,
   arrow:true,
   prevArrow: '<button class="slide-arrow prev-arrow"></button>',
   nextArrow: '<button class="slide-arrow next-arrow"></button>',
   infinite:true,
   slidesToShow: 5,
   slidesToScroll: 1,
   slidesToScroll: 1,
   autoplay: false,
   autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 1080,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    
     // dots: true, Boolean
    // arrows: false, Boolean
  });



///////////////////////////////////////////////////////////


$(".slick-slider5").slick({
   dots: true,
   loop: true,
   arrow:true,
   prevArrow: '<button class="slide-arrow prev-arrow"></button>',
   nextArrow: '<button class="slide-arrow next-arrow"></button>',
   infinite:true,
   slidesToShow: 5,
   slidesToScroll: 1,
   slidesToScroll: 1,
   autoplay: false,
   autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    
     // dots: true, Boolean
    // arrows: false, Boolean
  });




///////////////////////////////////////////////////////////


$(".slick-slider6").slick({
   dots: true,
   loop: true,
   arrow:true,
   prevArrow: '<button class="slide-arrow prev-arrow"></button>',
   nextArrow: '<button class="slide-arrow next-arrow"></button>',
   infinite:true,
   slidesToShow: 1,
   slidesToScroll: 1,
   slidesToScroll: 1,
   autoplay: false,
   autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    
     // dots: true, Boolean
    // arrows: false, Boolean
  });




///////////////////////////////////////////////////////////


$(".slick-slider7").slick({
   dots: true,
   loop: true,
   arrow:true,
   prevArrow: '<button class="slide-arrow prev-arrow"></button>',
   nextArrow: '<button class="slide-arrow next-arrow"></button>',
   infinite:true,
   slidesToShow: 3,
   slidesToScroll: 1,
   slidesToScroll: 1,
   autoplay: false,
   autoplaySpeed: 2000,
     responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    
     // dots: true, Boolean
    // arrows: false, Boolean
  });







/////////////////////////////////////

$(document).ready(function(){
  $('.accordion-list > li > .answer').hide();
    
  $('.accordion-list > li').click(function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active").find(".answer").slideUp();
    } else {
      $(".accordion-list > li.active .answer").slideUp();
      $(".accordion-list > li.active").removeClass("active");
      $(this).addClass("active").find(".answer").slideDown();
    }
    return false;
  });












  
});





const video = document.getElementById("video");
const circlePlayButton = document.getElementById("circle-play-b");

function togglePlay() {
  if (video.paused || video.ended) {
    video.play();
  } else {
    video.pause();
  }
}

circlePlayButton.addEventListener("click", togglePlay);
video.addEventListener("playing", function () {
  circlePlayButton.style.opacity = 0;
});
video.addEventListener("pause", function () {
  circlePlayButton.style.opacity = 1;
});












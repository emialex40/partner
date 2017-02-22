$(document).ready(function() {



	      // anchor code
// var $page = $('html, body');
//   $('a[href*="#"]').click(function() {
//     event.preventDefault();
//       $page.animate({
//           scrollTop: $($.attr(this, 'href')).offset().top
//       }, 1000);
//     return false;
// });

$(".navbar").changeActiveNav();

$(function(){
$('.call img').jrumble();
$('.call img').trigger('startRumble');
 
});

	$('#popup i, #parent_popup').on('click', function() {
	$('#parent_popup, #popup').css('display', 'none');
});

	$('.call, .callbeck').on('click', function() {
	$('#parent_popup, #popup').css('display', 'block');
});

	var top_show = 290;//при каком положении кнопка появляется
  var delay = 800; // Задержка прокрутки

    $(window).scroll(function () {
      if ($(this).scrollTop() > top_show) $('#top').fadeIn();
      else $('#top').fadeOut();
    });
    $('#top').click(function () {
      $('body, html').animate({
        scrollTop: 0
      }, delay);
    });


	$('.img_block').hover(
		function() {
	 	$('.img_hover').css('display', 'none');
	 	$(this).children('.img_hover').css('display', 'block');
	 },
		function() {
	 	$('.img_hover').css("display", "none");
	});


// slider slick

  $('.sl').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: false,
  autoplaySpeed: 2000,
  arrows: true,
  nextArrow: '<span class="prev"></span>',
  prevArrow: '<span class="next"></span>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.reviews').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  nextArrow: '<span class="rev-prev"></span>',
  prevArrow: '<span class="rev-next"></span>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// slider slick end


function main() {
		$('.menu-btn').click(function() {
			$('.menu').animate({
				'left': '0px'
			}, 600);

			// *********close-menu**********
			$('.icon-close').click(function() {
				$('.menu').animate({
					'left': -320
				}, 600);
			});

		});
	};
	main();

$(".loader_inner").fadeOut();
$(".loader").delay(200).fadeOut("slow");

$(".logo img").addClass('animated flip');

});
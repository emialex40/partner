$(document).ready(function() {

$('.img_block').hover(
	 function() {
	 	$('.img_hover').css("display", "block");
	},

	 function() {
 		$('.img_hover').css("display", "none");
	 });

// slider slick

  $('.sl').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
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
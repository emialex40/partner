$(document).ready(function() {

$('.sl').slick();



$('.carousel').carousel({ interval: false });

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
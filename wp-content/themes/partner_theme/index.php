<?php get_header();

if(is_front_page()){
	get_template_part( 'templates/index' );
}
else{
	get_template_part( 'templates/page' );
}

get_footer();   ?>
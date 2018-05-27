<?php 
	get_template_part('inc/menu-blog/menu-blog');
	
	get_template_part( 'templates/content-blog', get_post_type() ); 

	get_footer(); 
?>
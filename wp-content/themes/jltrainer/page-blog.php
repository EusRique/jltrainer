<?php get_template_part('inc/menu-blog/menu-blog'); ?>
	<div class="container">
		<div class="banner-btm-agile">
			<div class="col-md-9 btm-wthree-left">
				<?php
				$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination

			    $the_query = new WP_Query( array( 
			        'post_type' => 'post',
			        'paged' => $paged,
			        'posts_per_page' => 2
			    ));

    			while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<div class="wthree-top">
					<div class="w3agile-top">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_post_thumbnail(array(750, 750)); ?>" class="img-responsive" />
							</a>
						</div>
						<div class="w3agile-middle">
							<ul>
								<li>
									<a href="<?php the_permalink(); ?>">
										<i class="fa fa-calendar" aria-hidden="true"></i>
										<?php echo get_the_date('d'); ?> <?php echo get_the_date('F') ?>, <?php echo get_the_date('Y'); ?>
									</a>
								</li>							
							</ul>
						</div>
					</div>		
					<div class="w3agile-bottom">
						<div class="col-md-3 w3agile-left">
							<h5></h5>
						</div>
						<div class="col-md-9 w3agile-right">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							
							<p><?php echo the_content() ?></p>
							<a class="agileits w3layouts" href="<?php the_permalink(); ?>">Leia Mais</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php
				endwhile;
				?>
				<div class="blog_post_list_pagination">
					<div class="pagination_flexbox">		
			 			<div class="blog_wrapper pagination margin_flexbox_pagination">
							<?php wp_pagenavi(array( 'query' => $the_query )); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 w3agile_blog_left">
				<div class="wthreesearch">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search here" required="">
						<button type="submit" class="btn btn-default search" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</form>
				</div>
				<div class="agileinfo_calender">
					<h3>SIGA Nos</h3>
					<div class="w3ls-social-icons-1">
						<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
						<a class="linkedin" href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<div class="w3ls_recent_posts">
					<h3>Destaques</h3>
					<?php
	                    $args = array(
	                        'post_type'     => 'post',
	                        'numberposts'   =>  10,
	                        'tax_query'     => array(
	                            array(
	                                'taxonomy'  => 'category',
	                                'field'    	=> 'name',
	                                'terms'     => 'Destaque'
	                            )
	                        )
	                    );

	                    $posts = get_posts($args);
	                    $imagem_destaques = get_the_post_thumbnail_url($posts);

	                    foreach($posts as $key => $post): 
	                        $imagem_destaques = get_the_post_thumbnail_url($post);
	                ?>
							<div class="agileits_recent_posts_grid">
								<div class="agileits_recent_posts_gridl">
									<div class="w3agile_special_deals_grid_left_grid">
										<a href="<?php echo get_permalink($post->ID ); ?>">
											<img src="<?php echo $imagem_destaques; ?>" class="img-responsive" alt="<?php echo $post->post_title; ?>" />
										</a>
									</div>
								</div>
								<div class="agileits_recent_posts_gridr">
									<h4><a href="<?php echo get_permalink($post->ID ); ?>"><?php echo $post->post_title; ?></a></h4>
									<h5><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d', $post->ID); ?> <?php echo get_the_date('F', $post->ID); ?>, <?php echo get_the_date('Y', $post->ID); ?></h5>
								</div>
								<div class="clearfix"> </div>
							</div>
					<?php
						endforeach;
					?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="breadcrumbs">
	    <div class="container">
	    	<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s"></ol>
	    </div>
	</div>
<?php get_footer(); ?>
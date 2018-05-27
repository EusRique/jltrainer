<?php
    $posts = get_post();
    
    $imagem_destacada = get_the_post_thumbnail_url($posts);
?>
<div class="container">
	<div class="banner-btm-agile">
		<div class="col-md-9 btm-wthree-left">
			<div class="single-left">
				<div class="single-left1">
					<img src="<?php echo $imagem_destacada; ?>" alt="<?php echo $posts->post_title ?>" class="img-responsive" />
					<h3><?php echo $posts->post_title ?></h3>
					<p><?php echo $posts->post_content ?></p>
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
                    $imagem_destacaques = get_the_post_thumbnail_url($posts);

                    foreach($posts as $key => $post): 
                        $imagem_destacaques = get_the_post_thumbnail_url($post);
                ?>
					<div class="agileits_recent_posts_grid">
						<div class="agileits_recent_posts_gridl">
							<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="<?php echo $imagem_destacaques; ?>" class="img-responsive" alt="" /></a>
								</div>
						</div>
						<div class="agileits_recent_posts_gridr">
							<h4><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title ?></a></h4>
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
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            
        </ol>
    </div>
</div>
 <div class="Stage__header">
    <div class="wrapper">
        <div class="Header">
            <div class="Header__title-box">
                <h2 class="Title Header__title">Blog - Últimas Notícias</h2>
            </div>
        </div>
    </div>
</div>
<div class="container news">
    <div class="blog" id="blog">
        <div class="container">	
            <div class="jl-blog-grids">
                <?php
                    $args = array(
                        'post_type'     => 'post',
                        'numberposts'   =>  3,
                        'tax_query'     => array(
                            array(
                                'taxonomy'  => 'category',
                                'field'    => 'name',
                                'terms'     => 'Destaque'
                            )
                        )
                    );

                    $posts = get_posts($args);
                    $imagem_destacada = get_the_post_thumbnail_url($posts);

                    foreach($posts as $key => $post): 
                        $imagem_destacada = get_the_post_thumbnail_url($post);
                ?>
                        <div class="col-md-4 jl-blog-grid">
                            <div class="jl-blog-grid-img">
                                <a href="<?php echo get_permalink( $post->ID ); ?>"><img src="<?php echo $imagem_destacada; ?>" alt="<?php echo $post->post_title; ?>" /></a>
                                <a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a>
                                <p><?php echo get_the_date('d', $post->ID); ?> <?php echo get_the_date('F', $post->ID); ?>, <?php echo get_the_date('Y', $post->ID); ?></p>
                            </div>
                            <div class="jl-blog-grid-info">
                                <?php $leia_mais = get_extended ( $post->post_content ); ?>
                                <p><?php echo $leia_mais['main']; ?></p>
                                <div class="leia_mais">
                                    <a href="<?php echo get_permalink( $post->ID ); ?>"><h2 class="Title ">Leia Mais</h2></a>
                                </div>
                            </div>
                        </div>
                <?php
                    endforeach;
                ?>
                <div class="clearfix"> </div>
                <div class="container row">
                    <div class="col-xs-8 blog_more">
                        <a href="/blog">Veja mais notícias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
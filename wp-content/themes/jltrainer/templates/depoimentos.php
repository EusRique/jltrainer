<div class="Stage__header">
    <div class="wrapper">
        <div class="Header">
            <div class="Header__title-box">
                <h2 class="Title Header__title">Depoimentos</h2>
            </div>
        </div>
    </div>
</div>
<div class="testimonials">
    <div class="container">                  
        <div class='row'>
            <div class='col-md-offset-2 col-md-8'>
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <ol class="carousel-indicators">
                        <?php
                            $args = array(
                                'post_type'     => 'depoimentos',
                                'numberposts'   => 5,
                            );

                            $depoimentos = get_posts($args);
                            $gravatar = get_the_post_thumbnail_url($depoimentos);

                            foreach($depoimentos as $key => $depoimento):
                        ?>
                                <li data-target="#quote-carousel" data-slide-to="<?php if($key==0) { echo 'active'; } ?>"></li>
                        <?php
                            endforeach;
                        ?>

                    </ol>
                    <div class="carousel-inner">
                        <?php
                            foreach($depoimentos as $key => $depoimento):
                                $gravatar = get_the_post_thumbnail_url($depoimento);
                        ?>
                            <div class="item <?php if($key==0) { echo 'active'; } ?>">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            <img class="img-circle" src="<?php echo $gravatar; ?>" style="width: 100px;height:100px;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p><?php echo $depoimento->post_content; ?></p>
                                            <small><?php echo $depoimento->post_title; ?></small>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            
                        <?php
                            endforeach;
                        ?>
                    </div>
                    
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>                          
            </div>
        </div>
    </div>
</div>
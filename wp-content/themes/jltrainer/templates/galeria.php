<div class="Stage__header">
    <div class="wrapper">
        <div class="Header">
            <div class="Header__title-box">
                <h2 class="Title Header__title">Galeria</h2>
            </div>
        </div>
    </div>
</div>
<div class="container gallery">
    <div class="carousel_jl">
        <?php
            $args = array(
                'post_type'     => 'galeria',
                'numberposts'   => 10,
            );

            $galerias = get_posts($args);
            $imagem_destacada_galeria = get_the_post_thumbnail_url($galerias);

            foreach($galerias as $galeria):
                $imagem_destacada_galeria = get_the_post_thumbnail_url($galeria);
        ?>
                <div class="item">
                    <div class="imageContainer">
                        <img src="<?php echo $imagem_destacada_galeria; ?>" />
                    </div>
                </div>
        <?php 
            endforeach; 
        ?>
    </div>
</div>
 <div class="Stage__header">
    <div class="wrapper">
        <div class="Header">
            <div class="Header__title-box">
                <h2 class="Title Header__title">Serviços</h2>
            </div>
        </div>
    </div>
</div>
<div class="container services">
    <div class="carousel_jl">
        <?php
            $args = array(
                'post_type'     => 'servicos',
                'numberposts'   => 10,
            );

            $servicos = get_posts($args);
            $imagem_destacada = get_the_post_thumbnail_url($servicos);

            foreach($servicos as $servico):
                $imagem_destacada = get_the_post_thumbnail_url($servico);
        ?>
                <div class="item">
                    <div class="imageContainer">
                        <img src="<?php echo $imagem_destacada; ?>" />
                    </div>
                    <div class="overlay">
                        <h3><?php echo $servico->post_title; ?></h3>
                        <p><?php echo $servico->post_content; ?></p>
                    </div>
                </div>
        <?php 
            endforeach; 
        ?>
    </div>
</div>
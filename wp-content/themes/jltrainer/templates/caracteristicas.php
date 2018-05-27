<div class="Stage__header">
    <div class="wrapper">
        <div class="Header">
            <div class="Header__title-box">
                <h2 class="Title Header__title">O Melhor lugar para seu treino</h2>
            </div>
        </div>
    </div>
</div>
<div class="jl_caracteristica">
    <div class="container">
        <div class="jl-services-grids">
            <?php
                $args = array(
                    'post_type'     => 'caracteristicas',
                    'numberposts'   =>  4
                );

                $caracteristicas = get_posts($args);
                $imagem_destacada = get_the_post_thumbnail_url($caracteristicas);

                foreach($caracteristicas as $key => $caracteristica): 
                    $imagem_destacada = get_the_post_thumbnail_url($caracteristica);
            ?>
                    <div class="col-md-3 jl-services-grid">
                        <div class="icon_modernidade">
                            <img src="<?php echo $imagem_destacada; ?>">
                        </div>
                        <div class="jl-services-info">
                            <h4><?php echo $caracteristica->post_title; ?></h4>
                            <p><?php echo $caracteristica->post_content; ?></p>
                        </div>
                    </div>
            <?php
                endforeach;
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
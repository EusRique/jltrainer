<?php $sobre = get_post(28); ?>
<div class="Stage__header">
    <div class="wrapper">
        <div class="Header">
            <div class="Header__title-box">
                <h2 class="Title Header__title">Sobre</h2>
            </div>
        </div>
    </div>
</div>
<div class="container about" >
    <div class="row">
        <div class="col-sm-6">
            <img class="alignnone" src="<?php echo get_the_post_thumbnail_url(28); ?>" alt="JL Trainer" width="549" height="358">
        </div>
        <div class="col-sm-6 jl__texto">
            <div class="jl__texto--box">
                <p><?php echo wpautop($sobre->post_content); ?></p>
            </div> 
        </div>
    </div>
</div>
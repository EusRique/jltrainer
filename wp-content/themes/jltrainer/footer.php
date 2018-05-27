        </div>
        <footer class="nb-footer" id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                        <ul class="adress">
                            <span>Endereço</span>    
                            <li><p><?php echo CFS()->get( 'nome_da_academia', 84 ); ?></p></li>    
                            <li><p><?php echo CFS()->get( 'endereco', 84 ); ?></p></li>    
                            <li><p><?php echo CFS()->get( 'cidade', 84 ); ?></p></li>     
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <ul class="adress">
                            <span>Contato</span>    
                            <li><p><?php echo CFS()->get( 'chamada', 84 ); ?></p></li>  
                            <?php 
                                $loop = CFS()->get( 'telefones', 84  ); 
                                if(!empty($loop)):
                                    foreach ( $loop as $row ):
                            ?>  
                                        <li><p><?php echo $row['telefone']; ?></p></li>
                            <?php
                                    endforeach;
                                endif;
                            ?>   
                            <?php 
                                $loop_emails = CFS()->get( 'contato', 84  );
                                if(!empty($loop_emails)):
                                    foreach ( $loop_emails as $loop_email ):
                            ?>  
                                        <li><p><?php echo $loop_email['email']; ?></p></li>
                            <?php
                                    endforeach;
                                endif;
                            ?>   
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <ul class="adress">
                            <span>Horário de Funcionamento</span>    
                            <li><p><?php echo CFS()->get( 'horario_de_funcionamento', 84 ); ?></p></li>
                        </ul>
                    </div>          
                </div> 
            </div>
            <div class="col-sm-12">
                <div class="sociais">
                    <p>Nos Siga</p>
                    <div class="social-media">
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/juliolopes85/?ref=br_rs" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/explore/locations/391049095/jl-trainer/" title=""><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 copyright_jl">
                            <p>Copyright © 2017. JL Trainer.</p>
                        </div>
                        <div class="col-xs-6 text-right copyright_jl"><a href="http://henrique-camargo.com/" title="">Desenvolvido por HC Web Solutions</a></div>
                    </div>
                </div>
            </section>
        </footer>
        <script type="text/javascript">
            // Galeria servicos e academia
            $('.carousel_jl').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                centerMode: false,
                variableWidth: false,
                autoplay: true,
                arrows: false
            });

            // Galeria depoimentos
            $(document).ready(function() {
                $('#quote-carousel').carousel({
                    pause: true,
                    interval: 4000,
                });
            });
        </script>
        <script>
            //script ancora menu
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
    </body>
</html>
<?php 
    /*
    * Template Name: Formulario de contacto
    */
    get_header(); 
    ?>

    <main>
        <section class="portada portada-margin">
            <div class="">
                <?php dynamic_sidebar('footer_right'); ?>
            </div>
        </section>
 
        <section class="contenido-template template-contacto">
            <div class="contenido-pagina">
                <h3 class="titulo"><?php echo get_the_title(); ?></h3>
                <div class="col-2">
                    <div class="col-izquierda">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-derecha">
                        <?php dynamic_sidebar('footer_left'); ?>
                        <ul class="redesSociales">
                            <?php if (get_field('instagram')){ ?><li><a class="redSocial" href="<?php echo get_field('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li> <?php } ?>
                            <?php if (get_field('facebook')){ ?><li><a class="redSocial" href="<?php echo get_field('facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li> <?php } ?>
                            <?php if (get_field('linkedin')){ ?><li><a class="redSocial" href="<?php echo get_field('linkedin'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li> <?php } ?>
                            <?php if (get_field('e-mail')){ ?><li><a class="redSocial" href="mailto:<?php echo get_field('e-mail'); ?>" target="_blank"><i class="far fa-envelope"></i></a></li> <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer contenedor">
            <div class="contenido-footer">
                <?php get_template_part('template-parts/footer-page'); ?>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
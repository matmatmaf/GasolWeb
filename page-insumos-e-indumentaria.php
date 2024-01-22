<?php
    /*
    * Template Name: Insumos e Indumentaria
    */
    get_header();
?>

<main>
    <div class="portada portada-margin">
        <div class="imgFondo">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'imagen-portada'));
            }
            ?>
        </div>
        <div class="textoPortada">
            <div class="clase">
                <?php 
                    $cat = get_field('category');
                    if (!is_null($cat)) {
                        echo $cat->name;
                    }
                ?>    
            </div>
            <div class="titulo"><?php the_title();?></div>
        </div>
    </div>
    
    <div class="contenido-template sidebar-pagina">
        <aside class="sidebar">
            <?php
            $args = array( 
                'theme_location'        => 'menu-secundario',
                'container'             => 'nav',
                'container_class'       => 'menu-productos-y-servicios',
                'menu_class'            => 'menu-secundario',
            );
            wp_nav_menu($args);
            ?>
        </aside>
        <section class="contenido-pagina">
            <?php the_content(); ?>
            <?php gasolweb_insumos_e_indumentaria( -1, get_field('category_to_show'));?>
        </section>
    </div>

    <div class="footer-template">
        <?php get_template_part('template-parts/footer-template-clientes'); ?>
    </div>
</main>

<?php get_footer(); ?>
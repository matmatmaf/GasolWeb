<?php
    /*
    * Template Name: Gases para la industria
    */
    get_header();
?>

<main>
    <div class="portada">
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
    <?php
        if (get_field('thumbnail_secundary')) {
            ?>
                <div class="portada portada-pagina portada-margin">
                    <div class="imgFondo">
                        <img src="<?php echo get_field('thumbnail_secundary'); ?>" alt="Portada secundaria">
                    </div>
                </div>
            <?php
        }
    ?>
    
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
            <?php gasolweb_lista_de_gases( -1, get_field('categoria_de_secciones'));?>
            <section class="contenido-gases">
                <?php gasolweb_lista_de_gases( -1, get_field('gases'), "lista-gases");?>
            </section>
            <section class="contenido-clases-gases">
                <?php gasolweb_lista_de_gases( -1, get_field('clases_de_gases'), "lista-clases-gases");?>
            </section>
            <?php gasolweb_etiquetas_relacionadas();?>
        </section>
    </div>

    <div class="footer-template">
            <?php get_template_part('template-parts/footer-template-clientes'); ?>
        </div>
</main>

<?php get_footer(); ?>
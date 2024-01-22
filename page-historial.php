<?php
    /*
    * Template Name: Cronologia (No Sidebars)
    */
    get_header();
?>

<main>
    <div class="portada oscurecer-img portada-margin">
        <div class="imgFondo">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'imagen-portada' ));
            }
            ?>
        </div>
        <div class="textoPortada">
            <div class="clase">
                <?php 
                 if (!is_null(get_field('category'))) {
                    echo get_field('category')->name;
                 }
                ?>
            </div>
            <div class="titulo"><?php the_title();?></div>
        </div>
    </div>
    <div class="contenido-template">
        <div class="contenido-pagina contenido-grilla">
            <?php gasolweb_lista_de_hechos();?>
            <div class="ultima-columna">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
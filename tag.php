<?php get_header(); ?>
    <?php 
        $tag = get_queried_object();
    ?>
    <h2 class="text-primary text-center">Etiqueta<?php echo ': '.$tag->name; ?></h2>
    <h1>Busqueda de temas</h1>
    <main>
        <?php
        while (have_posts()) : the_post();
            the_title();
            the_content();
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'imagen-portada' ));
            }
        endwhile;
    ?>
    </main>

<?php get_footer(); ?>
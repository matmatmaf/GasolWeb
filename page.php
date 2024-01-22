<?php 
    get_header(); 
?>

    <main>
        <?php
        while (have_posts()) : the_post();
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array( 'class' => 'imagen-portada'));
            }
            the_title();
            the_content();
        endwhile;
        ?>
    </main>

<?php get_footer(); ?>
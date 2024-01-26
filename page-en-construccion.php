<?php 
    /*
    * Template Name: Pagina en construccion/mantenimiento
    */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="template-disabledPage">
            <div class="desktop">
                <img src="<?php echo get_field('disabledPage_descktop'); ?>" alt="Imagen resumida de servicios">
            </div>
            <div class="mobile">
                <img src="<?php echo get_field('disabledPage_mobile'); ?>" alt="Imagen resumida de servicios">
            </div>
        </div>
    </body>

    <?php wp_footer(); ?>
</html>
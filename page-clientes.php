<?php 
    /*
    * Template Name: Listado de clientes
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
                            if (is_array($cat))
                                echo $cat[0]->name;
                            else
                                $cat;
                        }
                    ?>    
                </div>
                <div class="titulo"><?php the_title();?></div>
            </div>
        </div>
        
        <div class="contenido-template">
            <div class="contenido-pagina">
                <?php
                    $galeria = get_post_gallery( get_the_ID(), false );

                    if( isset($galeria) && !is_bool($galeria) && $galeria ){
                        // Obtener los id's en un array
                        $galeria_imagenes_ID = explode(",", $galeria['ids']);
                        ?>
                            <ul class="galeria-imagenes">
                                <?php 
                                    foreach($galeria_imagenes_ID as $id) {
                                        ?>
                                            <li>
                                                <img src="<?php echo wp_get_attachment_image_src($id, 'large')[0]; ?>" alt="imagen galeria"/>
                                                </a>
                                            </li>
                                        <?php 
                                    }
                                ?>
                            </ul>
                        <?php 
                    }
                ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
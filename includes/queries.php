<?php

function gasolweb_lista_de_hechos($cantidad = -1) {
    ?>
        <?php 
            $args = array(
                'post_type' => 'gasolplatense_hechos',
                'posts_per_page' => $cantidad,
                'order' => 'ASC',
                'orderby' => 'title',
            );
            $hecho = new WP_Query($args);
            while($hecho->have_posts()) {
                $hecho->the_post();
                ?>
                    <h3><?php the_title(); ?></h3>
                    <hr>
                    <?php the_content(); ?>
                <?php 
            }
            wp_reset_postdata();
        ?>
    <?php
}

function gasolweb_carousel($cantidad = -1, $categoria, $postType = 'post', $title = '',$addClass = '', $duplicado = true ) {
    $args = array(
        'post_type'         => $postType,
        'posts_per_page'    => $cantidad,
        'cat'               => $categoria,
        'order'             => 'ASC',
        'orderby'            => 'title',
    );
    $postlist = new WP_Query($args);
    if ($postlist->have_posts()) {
        ?>
            <div class="carousel <?php echo $addClass; ?>">
                <div class="carousel-title">
                    <h3><?php echo $title; ?></h3>
                </div>
                <div class="carousel-body">
                    <div class="item-first"></div>
                    <?php 
                        echo '<ul class="carousel-list">';
                        while($postlist->have_posts()) {
                            $postlist->the_post();
                            ?>
                                <li class="carousel-item">
                                    <?php 
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('small', array('class' => 'imagen-card'));
                                        }
                                    ?>
                                </li>
                            <?php 
                        }
                        if ( $duplicado ){
                            rewind_posts();
                            while($postlist->have_posts()) {
                                $postlist->the_post();
                                ?>
                                    <li class="carousel-item duplicado">
                                        <?php 
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('small', array('class' => 'imagen-card'));
                                            }
                                        ?>
                                    </li>
                                <?php 
                            }
                        }
                        echo '</ul>';
                    ?> 
                    <div class="item-last"></div>
                </div>
            </div>
        <?php
    }
}

function gasolweb_lista_de_productos_y_servicios(int $cantidad = -1, $categorias ) {
    ?>
        <?php 
            if ( isset($categorias) && ($categorias !== false) ) {
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $cantidad,
                    'cat' => $categorias
                );
                $hecho = new WP_Query($args);
                while($hecho->have_posts()) {
                    $hecho->the_post();
                    ?>
                    <div class="card contraible">
                        <div class="contenido">
                            <div class="cabecera">
                                <h3><?php the_title(); ?></h3>
                                <div class="arrow up"></div>
                            </div>
                            <div class="cuerpo">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="imagen">
                            <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('small', array('class' => 'imagen-card'));
                                }
                            ?>
                        </div>
                    </div>
                    <?php 
                }
                wp_reset_postdata();
            }
        ?>
    <?php
}

function gasolweb_insumos_e_indumentaria(int $cantidad = -1, $categoria ) {
    ?>
        <?php 
            if ( isset($categoria) && !empty($categoria)  && ($categoria !== false) ) {
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => $cantidad,
                    'cat'               => $categoria,
                    'orderby'           => 'post_date',
                    'order'             => 'ASC',
                );
                $post = new WP_Query($args);
                while($post->have_posts()) {
                    $post->the_post();
                    ?>
                    <div class="card">
                        <h3><?php the_title(); ?></h3>
                        <div class="contenido">
                            <?php echo '<div class="entry-info">';  ?>
                            <?php the_content(); ?>
                            <?php the_tags('<div class="tags">', '' ,'</div>'); ?>
                            <?php echo '</div>';  ?>
                            <?php 
                                $content = apply_filters( 'the_content', get_the_content() );
                                $galery = get_media_embedded_in_content( $content, array( 'galery' ) );
                                
                                if ( ! empty( $galery ) ) {
                                    echo '<div class="entry-galery">';
                                    foreach ( $galery as $galery_html ) {
                                        echo $galery_html;
                                    }
                                    echo '</div>';
                                };
                            ?>
                        </div>
                    </div>
                    <?php 
                }
                wp_reset_postdata();
            }
        ?>
    <?php
}

function gasolweb_lista_imagenes_post(int $cantidad = -1, $categoria, $duplicado = false ) {
    ?>
        <?php 
            if ( isset($categoria) &&  !empty($categoria) ) {
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => $cantidad,
                    'orderby'           => 'post_title',
                    'order'             => 'ASC',
                );
                $clientes = new WP_Query($args);
                echo '<ul class="lista-cliente">';
                while($clientes->have_posts()) {
                    $clientes->the_post();
                    ?>
                        <li class="item-cliente">
                            <?php 
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('small', array('class' => 'imagen-card'));
                                }
                            ?>
                        </li>
                    <?php 
                }
                if ( $duplicado ){
                    rewind_posts();
                    while($clientes->have_posts()) {
                        $clientes->the_post();
                        ?>
                            <li class="item-cliente duplicado">
                                <?php 
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('small', array('class' => 'imagen-card'));
                                    }
                                ?>
                            </li>
                        <?php 
                    }
                }
                echo '</ul>';
                wp_reset_postdata();
            }
        ?>
    <?php
}

function gasolweb_lista_de_gases(int $cantidad = -1, $categoria, $clase = "" ) {
    ?>
        <?php 
            if ( isset($categoria) && ($categoria !== false) ) {
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $cantidad,
                    'cat' => $categoria
                );
                $hecho = new WP_Query($args);
                while($hecho->have_posts()) {
                    $hecho->the_post();
                    ?>
                    <div class="card-gases <?php echo $clase; ?>">
                        <?php 
                            if ( get_field('gas') ) {
                                ?>
                                    <div class="nomenclatura">
                                        <?php str_NumbersToSub(get_field('gas')); ?>
                                    </div>
                                <?php 
                            }
                        ?>
                        <div class="contenido">
                            <div class="titulo"><?php the_title(); ?></div>
                            <div class="cuerpo">
                                <?php the_content(); ?>
                                <?php 
                                if ( get_field('datasheet') ) {
                                    ?>
                                        <a class="hoja-datos" href="<?php the_field('datasheet'); ?>">Hoja de seguridad &darr;</a>
                                    <?php 
                                }
                            ?>
                            </div>
                        </div>
                        <div class="imagen">
                            <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('small', array('class' => 'imagen-card'));
                                }
                            ?>
                        </div>
                    </div>
                    <?php 
                }
                wp_reset_postdata();
            }
        ?>
    <?php
}

function str_NumbersToSub(string $str) {
    $respuesta = '';
    $arr = str_split($str);
    foreach( $arr as $cha ) {
        if ( is_numeric($cha)){
            $respuesta .= '<sub>'.$cha.'</sub>';
        }
        else {
            $respuesta .= $cha;
        }
    }
    echo $respuesta;
}
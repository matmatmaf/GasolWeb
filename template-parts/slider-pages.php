<?php
    $pagesRef = get_field('pages_slider');
    if ( $pagesRef ) {
        $pages = array();
        foreach ( $pagesRef as $pageURL) {
            $url_components = parse_url($pageURL);
            parse_str($url_components['query'], $params);
            array_push($pages,get_post(intval($params['page_id']))); 
        }
        if(!empty($pages)) {
        ?>
            <div class="slider">
                <ul class="slider-navegacion">
                    <?php
                        foreach ( $pages as $page) {
                            ?>
                                <li class="menu-item"><a><?php echo $page->post_title; ?></a></li>
                            <?php
                        }
                    ?>
                </ul>

                <div class="slider-tarjetas">
                    <div class="card-page-list">
                        <?php
                            foreach ( $pages as $page) {
                                ?>
                                    <div class="card-page">
                                        <div class="imagen-fondo">
                                            <img src="<?php echo get_the_post_thumbnail_url($page->ID, 'madium') ?>" alt="Portada <?php echo $page->post_title; ?>">
                                        </div>
                                        <div class="contenido">
                                            <div class="categoria">
                                                <?php 
                                                    $cat = get_field('category', $page->ID);
                                                    if (!is_null($cat)) {
                                                        echo $cat->name;
                                                    }
                                                ?> 
                                            </div>
                                            <div class="titulo">
                                                <span><?php echo $page->post_title; ?></span>
                                                <div class="cuerpo">
                                                    <p>
                                                        <?php echo get_field('descripcion_short', $page->ID); ?> 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="enlace">
                                                <a href="<?php echo $page->guid; ?>">Conoce mas haciendo clik aquí &#8599;</a>
                                            </div>
                                        </div>
                                        <?php
                                            if (get_field('thumbnail_secundary', $page->ID)) {
                                                ?>
                                                    <div class="imagen-secundaria">
                                                        <img src="<?php echo get_field('thumbnail_secundary', $page->ID); ?>" alt="Portada secundaria">
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                    <ul class="puntos">
                        <?php
                            foreach ( $pages as $page) {
                                ?>
                                    <li class="punto"></li>
                                <?php
                            }
                        ?>
                </ul>
                </div>
            </div>
        <?php
        }
    }
?>
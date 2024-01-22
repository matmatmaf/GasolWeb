<?php 
    $url = get_field('footer-category');
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    if ( isset($params['page_id']) &&  !empty($params['page_id']) ) {
        $pageFooter = get_post(intval($params['page_id'])); 
        ?>       
            <div class="footer-tittle">
                <h3><?php echo $pageFooter->post_title; ?></h3>
            </div>
            <div class="footer-carrucel">
                <div class="item-first"></div>
                <?php 
                    gasolweb_lista_imagenes_post(-1,array(get_field('category', $pageFooter->ID )->term_id),true);
                ?> 
                <div class="item-last"></div>
            </div>
        <?php 
    }
?>
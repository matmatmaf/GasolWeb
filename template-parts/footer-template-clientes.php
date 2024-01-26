<?php 
    $url = get_field('footer-category');
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    if ( isset($params['page_id']) &&  !empty($params['page_id']) ) {
        $pageFooter = get_post(intval($params['page_id'])); 
        $cat = get_field('category', $pageFooter->ID )->term_id ;
        $aditionalClass = (array_key_exists('class', $args))?$args['class']:'';
        if ( $cat ) {
            gasolweb_carousel(-1,array($cat), 'post', $pageFooter->post_title, $aditionalClass, true);
        }
    }
?>
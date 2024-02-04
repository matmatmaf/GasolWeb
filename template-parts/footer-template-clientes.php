<?php 
    $pageID = get_field('footer-category');
    if ($pageID) {
        $pageFooter = get_post($pageID); 
        $cat = get_field('category', $pageFooter->ID )->term_id ;
        $aditionalClass = (array_key_exists('class', $args))?$args['class']:'';
        if ( $cat ) {
            gasolweb_carousel(-1,array($cat), 'post', $pageFooter->post_title, $aditionalClass, true);
        }
}
?>
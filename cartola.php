<?php
add_filter('rwmb_meta_boxes', function($metaboxes) {
    /**
	 * Category
	 */
    $metaboxes[] = array(
        'title'      => __( 'Cartola', 'ifrs-portal-plugin-cartola' ),
        'context'    => 'side',
        'priority'   => 'low',
        'post_types' => 'post',
        'fields'     => array(
            array(
                'id'             => '_cartola_category_taxonomy',
                'type'           => 'taxonomy',
                'taxonomy'       => 'category',
                'std'            => get_option('default_category'),
                'add_new'        => false,
                'remove_default' => true,
                'field_type'     => 'radio_list',
                'inline'         => false,
            )
        ),
        'validation' => array(
            'rules'  => array(
                '_cartola_category_taxonomy' => array(
                    'required'  => true,
                ),
            ),
            'messages' => array(
                '_cartola_category_taxonomy' => array(
                    'required'  => __( 'Selecione uma Cartola.', 'ifrs-portal-plugin-cartola' ),
                ),
            ),
        ),
    );

    return $metaboxes;
}, 10);

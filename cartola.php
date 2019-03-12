<?php
function cartola_metaboxes() {
    $prefix = '_cartola_';

    /**
	 * Category
	 */
    $cartola_metabox = new_cmb2_box( array(
		'id'           => 'category_taxonomy_metabox',
		'title'        => __( 'Cartola', 'ifrs-portal-plugin-cartola' ),
		'object_types' => array( 'post' ),
		'context'      => 'side',
		'priority'     => 'low',
		'show_names'   => false,
    ) );

    $cartola_metabox->add_field( array(
        'id'                => $prefix . 'category_taxonomy',
        'name'              => __( 'Cartola', 'ifrs-portal-plugin-cartola' ),
        'desc'              => __( 'Escolha a categoria da notícia.', 'ifrs-portal-plugin-cartola' ),
        'taxonomy'          => 'category',
        'type'              => 'taxonomy_radio',
        'show_option_none'  => false,
        'text'              => array(
            'no_terms_text' => __( 'Ops! Nenhuma categoria cadastrada.', 'ifrs-portal-plugin-cartola')
        ),
        'remove_default'    => 'true',
    ) );
}

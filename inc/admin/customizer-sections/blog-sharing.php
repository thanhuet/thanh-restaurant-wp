<?php
/**
 * Section Sharing
 *
 * @package Hair_Salon
 */

thim_customizer()->add_section(
    array(
        'id'       => 'sharing',
        'panel'    => 'blog',
        'title'    => esc_html__( 'Social Share', 'restaurant-wp' ),
        'priority' => 21,
    )
);

// Sharing Group
thim_customizer()->add_field(
    array(
        'id'       => 'group_sharing',
        'type'     => 'sortable',
        'label'    => esc_html__( 'Sortable Buttons Sharing', 'restaurant-wp' ),
        'tooltip'  => esc_html__( 'Click on eye icons to show or hide buttons. Use drag and drop to change the position of social share icons..', 'restaurant-wp' ),
        'section'  => 'sharing',
        'priority' => 10,
        'default'  => array(
            'facebook',
            'twitter',
            'pinterest',
            'google',
            'fancy'
        ),
        'choices'  => array(
            'facebook'  => esc_html__( 'Facebook', 'restaurant-wp' ),
            'twitter'   => esc_html__( 'Twitter', 'restaurant-wp' ),
            'pinterest' => esc_html__( 'Pinterest', 'restaurant-wp' ),
            'google'    => esc_html__( 'Google Plus', 'restaurant-wp' ),
            'fancy'     => esc_html__( 'Fancy', 'restaurant-wp' ),
        ),
    )
);


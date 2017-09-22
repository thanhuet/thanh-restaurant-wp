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
        'title'    => esc_html__( 'Social Share', 'thim-starter-theme' ),
        'priority' => 21,
    )
);

// Sharing Group
thim_customizer()->add_field(
    array(
        'id'       => 'group_sharing',
        'type'     => 'sortable',
        'label'    => esc_html__( 'Sortable Buttons Sharing', 'thim-starter-theme' ),
        'tooltip'  => esc_html__( 'Click on eye icons to show or hide buttons. Use drag and drop to change the position of social share icons..', 'thim-starter-theme' ),
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
            'facebook'  => esc_html__( 'Facebook', 'thim-starter-theme' ),
            'twitter'   => esc_html__( 'Twitter', 'thim-starter-theme' ),
            'pinterest' => esc_html__( 'Pinterest', 'thim-starter-theme' ),
            'google'    => esc_html__( 'Google Plus', 'thim-starter-theme' ),
            'fancy'     => esc_html__( 'Fancy', 'thim-starter-theme' ),
        ),
    )
);


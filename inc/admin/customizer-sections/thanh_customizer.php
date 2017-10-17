<?php
// panel thanh ...
thim_customizer() -> add_panel(
    array(
        'id'       => 'thanh',
//        'priority' => 42,
        'title'    => esc_html__( 'thanh customizer', 'thim-starter-theme' ),
        'icon'     => 'dashicons-admin-home',
    )
);
?>
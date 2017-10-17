<?php
    thim_customizer() ->add_section(
        array(
            'id'       => 'thanh-background',
            'panel'    => 'thanh',
//            'priority' => 90,
            'title'    => esc_html__( 'background', 'thim-starter-theme' ),
        )
);
    thim_customizer() ->add_field(
        array(
            'type'            => 'color',
            'id' => 'thanh-background-color',
            'label'           => esc_html__( 'Google Theme Color', 'thim-starter-theme' ),
            'section'         => 'thanh-background',
            'default'         => 'red',
        )
);
?>
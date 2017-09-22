<?php
/**
 * Group Headings Typography
 *
 * @package Thim_Starter_Theme
 */

// Body_Typography_Group
thim_customizer()->add_group( array(
    'id'       => 'heading_typography',
    'section'  => 'typography',
    'priority' => 30,
    'groups'   => array(
        array(
            'id'     => 'heading_group',
            'label'  => esc_html__( 'Headings', 'thim-starter-theme' ),
            'fields' => array(
                array(
                    'id'        => 'font_title',
                    'label'     => esc_html__( 'Heading Font-Family', 'thim-starter-theme' ),
                    'tooltip'   => esc_html__( 'Allows you to select font-family for headings (h1, h2, h3, h4, h5, h6)', 'thim-starter-theme' ),
                    'type'      => 'typography',
                    'priority'  => 10,
                    'default'   => array(
                        'font-family' => 'Playfair Display',
                        'color'       => '#333333',
                        'variant'     => '700',
                    ),
                    'transport' => 'postMessage',
                    'js_vars'   => array(
                        array(
                            'choice'   => 'font-family',
                            'element'  => 'h1, h2, h3, h4, h5, h6',
                            'property' => 'font-family',
                        ),
                        array(
                            'choice'   => 'color',
                            'element'  => 'body h1, body h2, body h3, body h4, body h5, body h6, article .entry-title a,
                                            .comment-edit-link:hover,
                                            .comment-reply-link:hover,
                                            .reply-title,
                                            body .sc-heading.article_heading .heading_primary,
                                            body .site-content .blog-content article .entry-title a, 
                                            body .site-content .page-content article .entry-title a',
                            'property' => 'color',
                        ),
                        array(
                            'choice'   => 'variant',
                            'element'  => 'h1, h2, h3, h4, h5, h6',
                            'property' => 'font-weight',
                        ),
                    )
                ),
                // H1  Fonts
                array(
                    'id'        => 'font_h1',
                    'label'     => esc_html__( 'Heading 1', 'thim-starter-theme' ),
                    'tooltip'   => esc_html__( 'Allows you to select all font properties of H1 tag for your site', 'thim-starter-theme' ),
                    'type'      => 'typography',
                    'priority'  => 10,
                    'default'   => array(
                        'font-size'      => '44px',
                        'line-height'    => '1.6em',
                        'text-transform' => 'none',
                    ),
                    'transport' => 'postMessage',
                    'js_vars'   => array(
                        array(
                            'choice'   => 'font-size',
                            'element'  => 'body h1',
                            'property' => 'font-size',
                        ),
                        array(
                            'choice'   => 'line-height',
                            'element'  => 'body h1',
                            'property' => 'line-height',
                        ),
                        array(
                            'choice'   => 'text-transform',
                            'element'  => 'body h1',
                            'property' => 'text-transform',
                        ),
                    ),
                ),
                // H2  Fonts
                array(
                    'id'        => 'font_h2',
                    'label'     => esc_html__( 'Heading 2', 'thim-starter-theme' ),
                    'tooltip'   => esc_html__( 'Allows you to select all font properties of H2 tag for your site', 'thim-starter-theme' ),
                    'type'      => 'typography',
                    'priority'  => 20,
                    'default'   => array(
                        'font-size'      => '40px',
                        'line-height'    => '1.6em',
                        'text-transform' => 'none',
                    ),
                    'transport' => 'postMessage',
                    'js_vars'   => array(
                        array(
                            'choice'   => 'font-size',
                            'element'  => 'body h2',
                            'property' => 'font-size',
                        ),
                        array(
                            'choice'   => 'line-height',
                            'element'  => 'body h2',
                            'property' => 'line-height',
                        ),
                        array(
                            'choice'   => 'text-transform',
                            'element'  => 'body h2',
                            'property' => 'text-transform',
                        ),
                    )
                ),
                // H3 Fonts
                array(
                    'id'        => 'font_h3',
                    'label'     => esc_html__( 'Heading 3', 'thim-starter-theme' ),
                    'tooltip'   => esc_html__( 'Allows you to select all font properties of H3 tag for your site', 'thim-starter-theme' ),
                    'type'      => 'typography',
                    'priority'  => 30,
                    'default'   => array(
                        'font-size'      => '36px',
                        'line-height'    => '1.6em',
                        'text-transform' => 'none',
                    ),
                    'transport' => 'postMessage',
                    'js_vars'   => array(
                        array(
                            'choice'   => 'font-size',
                            'element'  => 'body h3',
                            'property' => 'font-size',
                        ),
                        array(
                            'choice'   => 'line-height',
                            'element'  => 'body h3',
                            'property' => 'line-height',
                        ),
                        array(
                            'choice'   => 'text-transform',
                            'element'  => 'body h3',
                            'property' => 'text-transform',
                        ),
                    )
                ),
                // H4 Fonts
                array(
                    'id'        => 'font_h4',
                    'label'     => esc_html__( 'Heading 4', 'thim-starter-theme' ),
                    'tooltip'   => esc_html__( 'Allows you to select all font properties of H4 tag for your site', 'thim-starter-theme' ),
                    'type'      => 'typography',
                    'priority'  => 40,
                    'default'   => array(
                        'font-size'      => '20px',
                        'line-height'    => '1.6em',
                        'text-transform' => 'none',
                    ),
                    'transport' => 'postMessage',
                    'js_vars'   => array(
                        array(
                            'choice'   => 'font-size',
                            'element'  => 'body h4',
                            'property' => 'font-size',
                        ),
                        array(
                            'choice'   => 'line-height',
                            'element'  => 'body h4',
                            'property' => 'line-height',
                        ),
                        array(
                            'choice'   => 'text-transform',
                            'element'  => 'body h4',
                            'property' => 'text-transform',
                        ),
                    )
                ),
                // H5 Fonts
                array(
                    'id'        => 'font_h5',
                    'label'     => esc_html__( 'Heading 5', 'thim-starter-theme' ),
                    'tooltip'   => esc_html__( 'Allows you to select all font properties of H5 tag for your site', 'thim-starter-theme' ),
                    'type'      => 'typography',
                    'priority'  => 50,
                    'default'   => array(
                        'font-size'      => '18px',
                        'line-height'    => '1.6em',
                        'text-transform' => 'none',
                    ),
                    'transport' => 'postMessage',
                    'js_vars'   => array(
                        array(
                            'choice'   => 'font-size',
                            'element'  => 'body h5',
                            'property' => 'font-size',
                        ),
                        array(
                            'choice'   => 'line-height',
                            'element'  => 'body h5',
                            'property' => 'line-height',
                        ),
                        array(
                            'choice'   => 'text-transform',
                            'element'  => 'body h5',
                            'property' => 'text-transform',
                        ),
                    )
                ),
                // H6 Fonts
                array(
                    'id'        => 'font_h6',
                    'label'     => esc_html__( 'Heading 6', 'thim-starter-theme' ),
                    'tooltip'   => esc_html__( 'Allows you to select all font properties of H6 tag for your site', 'thim-starter-theme' ),
                    'type'      => 'typography',
                    'priority'  => 60,
                    'default'   => array(
                        'font-size'      => '16px',
                        'line-height'    => '1.6em',
                        'text-transform' => 'none',
                    ),
                    'transport' => 'postMessage',
                    'js_vars'   => array(
                        array(
                            'choice'   => 'font-size',
                            'element'  => 'body h6',
                            'property' => 'font-size',
                        ),
                        array(
                            'choice'   => 'line-height',
                            'element'  => 'body h6',
                            'property' => 'line-height',
                        ),
                        array(
                            'choice'   => 'text-transform',
                            'element'  => 'body h6',
                            'property' => 'text-transform',
                        ),
                    )
                ),
            ),
        ),
    )
) );
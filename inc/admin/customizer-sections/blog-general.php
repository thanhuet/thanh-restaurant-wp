<?php
/**
 * Section Blog General
 *
 * @package Hair_Salon
 */

thim_customizer()->add_section(
    array(
        'id'             => 'blog_general',
        'panel'			 => 'blog',
        'title'          => esc_html__( 'Settings', 'restaurant-wp' ),
        'priority'       => 10,
    )
);

// Blog Archive Group
thim_customizer()->add_group( array(
    'id'       => 'blog_archive_setting_group',
    'section'  => 'blog_general',
    'priority' => 10,
    'groups'   => array(
        array(
            'id'     => 'blog_archive_page_group',
            'label'  => esc_html__( 'Archive Page', 'restaurant-wp' ),
            'fields' => array(
                //Blog Columns
                array(
                    'type'        => 'select',
                    'id'          => 'archive_post_column',
                    'label'       => esc_html__( 'Blog Columns', 'restaurant-wp' ),
                    'tooltip'     => esc_html__( 'Choose the number of columns for archive post.', 'restaurant-wp' ),
                    'default'     => '1',
                    'priority'    => 10,
                    'multiple'    => 0,
                    'choices'     => array(
                        '1' => esc_html__( '1', 'restaurant-wp' ),
                        '2' => esc_html__( '2', 'restaurant-wp' ),
                        '3' => esc_html__( '3', 'restaurant-wp' ),
                        '4' => esc_html__( '4', 'restaurant-wp' ),
                    ),
                ),
                // Excerpt Content
                array(
                    'id'          => 'excerpt_archive_content',
                    'type'        => 'slider',
                    'label'       => esc_html__( 'Excerpt Length', 'restaurant-wp' ),
                    'tooltip'     => esc_html__( 'Choose the number of words you want to cut from the content to be the excerpt of search and archive', 'restaurant-wp' ),
                    'priority'    => 20,
                    'default'     => 20,
                    'choices'     => array(
                        'min'  => '10',
                        'max'  => '100',
                        'step' => '5',
                    ),
                )
            ),
        ),
    )
) );

// Blog Single Group
thim_customizer()->add_group( array(
    'id'       => 'blog_single_setting_group',
    'section'  => 'blog_general',
    'priority' => 20,
    'groups'   => array(
        array(
            'id'     => 'blog_single_page_group',
            'label'  => esc_html__( 'Single Page', 'restaurant-wp' ),
            'fields' => array(
                // Show Feature Image
                array(
                    'type'     => 'switch',
                    'id'       => 'blog_single_feature_image',
                    'label'    => esc_html__( 'Featured Image', 'restaurant-wp' ),
                    'tooltip'  => esc_html__( 'Turn on to display featured images on single blog posts..', 'restaurant-wp' ),
                    'default'  => true,
                    'priority' => 10,
                    'choices'  => array(
                        true  => esc_html__( 'On', 'restaurant-wp' ),
                        false => esc_html__( 'Off', 'restaurant-wp' ),
                    ),
                ),
                // Turn On Comments
                array(
                    'type'     => 'switch',
                    'id'       => 'blog_single_comment',
                    'label'    => esc_html__( 'Comments', 'restaurant-wp' ),
                    'tooltip'  => esc_html__( 'Turn on to display comments.', 'restaurant-wp' ),
                    'default'  => true,
                    'priority' => 20,
                    'choices'  => array(
                        true  => esc_html__( 'On', 'restaurant-wp' ),
                        false => esc_html__( 'Off', 'restaurant-wp' ),
                    ),
                ),
                // Turn On Related Post
                array(
                    'type'     => 'switch',
                    'id'       => 'blog_single_related_post',
                    'label'    => esc_html__( 'Related Posts', 'restaurant-wp' ),
                    'tooltip'  => esc_html__( 'Turn on to display related posts.', 'restaurant-wp' ),
                    'default'  => true,
                    'priority' => 30,
                    'choices'  => array(
                        true  => esc_html__( 'On', 'restaurant-wp' ),
                        false => esc_html__( 'Off', 'restaurant-wp' ),
                    ),
                ),
                // Select Post Numbers For Related Post
                array(
                    'type'            => 'slider',
                    'id'              => 'blog_single_related_post_number',
                    'label'           => esc_html__( 'Numbers of Related Post', 'restaurant-wp' ),
                    'default'         => 3,
                    'priority'        => 40,
                    'choices'         => array(
                        'min'  => 1,
                        'max'  => 20,
                        'step' => 1,
                    ),
                    'active_callback' => array(
                        array(
                            'setting'  => 'blog_single_related_post',
                            'operator' => '==',
                            'value'    => true,
                        ),
                    ),
                ),
                // Select Post Column Numbers For Related Post dfd
                array(
                    'type'            => 'slider',
                    'id'              => 'blog_single_related_post_column',
                    'label'           => esc_html__( 'Columns of Related Post', 'restaurant-wp' ),
                    'default'         => 3,
                    'priority'        => 50,
                    'choices'         => array(
                        'min'  => 1,
                        'max'  => 12,
                        'step' => 1,
                    ),
                    'active_callback' => array(
                        array(
                            'setting'  => 'blog_single_related_post',
                            'operator' => '==',
                            'value'    => true,
                        ),
                    ),
                )

            ),
        ),
    )
) );

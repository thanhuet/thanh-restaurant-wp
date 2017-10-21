<?php


$news_args = array(
    'posts_per_page'      => $instance['posts_per_page'],
    'ignore_sticky_posts' => true,
);

$posts = new WP_Query( $news_args );

?>

<div class="thim-sc-posts blog-content">

    <div class="thim-sc-heading">
        <h3 class="widget-title"><?php echo esc_attr( $instance['title'] ) ?></h3>
    </div>

    <ul class="row">
        <ul>
        <?php

        if ( $posts->have_posts() ) :
            while ( $posts->have_posts() ) :
                $posts->the_post();
                ?>
                    <li>
                        <p><span>
                        <?php the_post_thumbnail(array('100px','100px')); ?>
                        </span><?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></p>

                    </li>
                <?php
            endwhile;
        endif;
        ?>
        </ul>
    </div>

</div>
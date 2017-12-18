<?php
$cateSelect       = $instance['choose_cate'];
$list_cate        = get_categories( $args );
$list_cate_option = array(
	"1" => esc_html__( 'All categories', 'restaurant-wp' )
);
foreach ( $list_cate as $item ) {
	array_push( $list_cate_option, esc_html( $item->name) );
}
$cateName = $cateSelect != 1 ? $list_cate_option[ $cateSelect ] : '';
$cateID   = get_cat_ID( $cateName );

$news_args = $instance['choose_cate'] == 1 ? array(
	'posts_per_page'      => $instance['posts_per_page'],
	'ignore_sticky_posts' => true,
	'tax_query'   => array(
		array(
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array( 'post-format-gallery' ),
			'operator' => 'NOT IN'
		)
	)
) : array(
	'posts_per_page'      => $instance['posts_per_page'],
	'ignore_sticky_posts' => true,
	'cat'                 => $cateID
);


$posts = new WP_Query( $news_args );

?>

<div class="thim-sc-posts blog-content">
    <div class="thim-sc-heading">
        <h2 class="title"><?php echo esc_attr( $instance['title'] ) ?></h2>
        <h2 class="description"><?php echo $instance['description']; ?></h2>
    </div>

	<?php
	$column = $instance['column'];
	$class  = 'column-' . $column . ' col-md-' . ( 12 / $column );
	?>

    <div id="thim-post-container" class="row ">
		<?php

		if ( $posts->have_posts() ) :
			while ( $posts->have_posts() ) :
				$classes = array();
				$posts->the_post();
				?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
                    <div class="content-inner row">
                        <div class="entry-top col-sm-12 col-md-6">
							<?php
                            $urlImage=get_the_post_thumbnail_url();
                            $imageCrop=thim_aq_resize($urlImage,560,360,1);
							?>
                            <img src="<?php echo esc_url($imageCrop);?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"></a>
                        </div><!-- .entry-top -->
                        <div class="entry-content col-sm-12 col-md-6">
                            <header class="entry-header">
								<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                            </header>
                            <div class="meta-entry">
								<?php thim_posted_on(); ?>
								<?php if ( comments_open() ) {
									echo '<span class="related-post-reply">';
									comments_popup_link(
										__( 'No comments', 'restaurant-wp' ),
										__( '1 comment', 'restaurant-wp' ),
										__( '% comments', 'restaurant-wp' ),
										__( 'Read all comments', 'restaurant-wp' )
									);
									echo '</span>';
								} ?>
                            </div>
                            <!-- .entry-header -->
                            <div class="entry-summary">
								<?php the_excerpt(); ?>
                            </div><!-- .entry-summary -->
                        </div><!-- .entry-content -->
                    </div> <!-- .content-inner -->
                </article><!-- #post-## -->
				<?php

			endwhile;
			wp_reset_postdata();
		endif;
		?>
    </div>

    <!--	--><?php
	/*	$blog_link = get_post_type_archive_link( 'post' );
		*/ ?>
    <div class="readmore" style="text-align: center">
        <div id="load-more-content">
            <div id="icon-load-more-post" class="loading-pulse"></div>
            <div id="text-loading"><?php echo esc_html__('Loading','restaurant-wp')?>...</div>
        </div>
        <a id="btn-load-more-post" class="btn-food-list" data-page="1"
           data-offset-page="<?php echo $instance['posts_per_page']; ?>" data-categoryid="<?php echo $cateID; ?>">
            <span><?php echo esc_html__('VIEW MORE','restaurant-wp')?></span>
        </a>
    </div><!-- .read-more -->
    <!--	<div class="text-center botton-category">
		<a class="btn btn-primary" href="<?php /*echo esc_url( $blog_link ); */ ?>">
			<?php /*esc_attr_e( 'View All Blog Posts', 'thimpress2017' ); */ ?>
			<i class="ion-android-arrow-forward"></i>
		</a>
	</div>-->

</div>
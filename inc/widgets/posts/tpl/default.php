<?php


$news_args = array(
	'posts_per_page'      => $instance['posts_per_page'],
	'ignore_sticky_posts' => true,
);

$posts = new WP_Query( $news_args );

?>

<div class="thim-sc-posts blog-content">

	<div class="thim-sc-heading">
		<h3 class="title"><?php echo esc_attr( $instance['title'] ) ?></h3>
		<p class="description"><?php echo esc_attr( $instance['description'] ) ?></p>
	</div>

	<?php
	$column = $instance['column'];
	$class  = 'column-' . $column . ' col-md-' . ( 12 / $column );
	?>

	<div class="row">
		<?php

		if ( $posts->have_posts() ) :
			while ( $posts->have_posts() ) :
				$classes = array();
				$posts->the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
					<div class="content-inner">
						<div class="entry-top">
							<?php
							if ( $column === '1' ) {
								do_action( 'thim_entry_top', 'full' );
							} else {
								thim_thumbnail( get_the_ID(), $instance['thumbnail_size'] );
							}
							?>
						</div><!-- .entry-top -->
						<div class="entry-content">
							<header class="entry-header">
								<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
							</header>
							<!-- .entry-header -->
							<div class="entry-summary">
								<?php the_excerpt(); ?>
							</div><!-- .entry-summary -->
							<div class="readmore">
								<a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html__( 'Read More', 'hairsalon' ); ?></a>
							</div><!-- .read-more -->

						</div><!-- .entry-content -->
					</div> <!-- .content-inner -->
				</article><!-- #post-## -->

				<?php

			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>

	<?php
	$blog_link = get_post_type_archive_link( 'post' );
	?>

	<div class="text-center botton-category">
		<a class="btn btn-primary" href="<?php echo esc_url( $blog_link ); ?>">
			<?php esc_attr_e( 'View All Blog Posts', 'thimpress2017' ); ?>
			<i class="ion-android-arrow-forward"></i>
		</a>
	</div>

</div>
<?php
/**
 * Template part for displaying single.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content-inner">
        <header class="entry-header">
            <?php
            if ( is_single() ) {
                the_title( '<h2 class="entry-title">', '</h2>' );
            } else {
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            }
            ?>
        </header><!-- .entry-header -->

        <?php thim_entry_meta(); ?>

		<div class="entry-top">
			<?php if ( get_theme_mod( 'blog_single_feature_image', true ) ) :
//				do_action( 'thim_entry_top', 'full' );
                $urlImage=get_the_post_thumbnail_url();
                $imageCrop=thim_aq_resize($urlImage,770,450,1);
            ?>
            <img src="<?php echo esc_url($imageCrop);?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
            <a href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"></a>
            <?php
            endif; ?>
		</div><!-- .entry-top -->
		<div class="entry-content">

			<div class="entry-description">
				<?php
				if ( has_post_format( 'chat' ) ) {
					thim_get_list_group_chat();
				}
				// Get post content
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'restaurant-wp' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>

			<div class="entry-tag-share">
                <span>Share this:</span>
				<?php if ( get_theme_mod( 'show_tags_meta_tags', true ) ) : ?>
					<?php thim_entry_meta_tags(); ?>
				<?php endif; ?>
				<?php do_action( 'thim_social_share' ); ?>
			</div>

		</div><!-- .entry-content -->

	</div><!-- .content-inner -->

    <div class="nav-single">
        <div class="nav-wrapper">
            <h3 class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">' . esc_html__('Previous ', 'restaurant-wp') . '</span> %title'); ?></h3>
            <h3 class="nav-next"><?php next_post_link('%link', '<span class="meta-nav">' . esc_html__('Next', 'restaurant-wp') . '</span> %title'); ?></h3>
        </div>
    </div>

<!--	--><?php //do_action( 'thim_about_author' ); ?>

	<?php if ( get_theme_mod( 'blog_single_related_post', true ) ) :
		get_template_part( 'templates/template-parts/related-posts' );
	endif; ?>
</article><!-- #post-## -->
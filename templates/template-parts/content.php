<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

$thim_options = get_theme_mods();

$column = isset($thim_options['archive_post_column']) ? get_theme_mod('archive_post_column') : 1;
$class = 'column-' . $column . ' col-md-' . (12 / $column);

if (isset($_GET['column'])) {
    $class = 'col-md-' . (12 / ($_GET['column']));
}
?>
// master test conflic
<article id="post-<?php the_ID(); ?>" <?php post_class( $class ); ?>>
	<div class="content-inner">
		<div class="entry-top">
            <header class="entry-header">
                <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
            </header>
            <!-- .entry-header -->

            <?php thim_entry_meta(); ?>
            <!-- .entry-meta -->
            <?php
            //			if ( $column === '1' ) {
            //				do_action( 'thim_entry_top', 'full' );
            //			} else {
            //				thim_feature_image( 420, 420, 'full' );
            //			}
            $urlImage = get_the_post_thumbnail_url();
            $imageCrop = thim_aq_resize($urlImage, 770, 450, 1);
            ?>
            <div class="img-content">
                <img src="<?php echo esc_url($imageCrop); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
            </div>
            <a href="<?php echo esc_url(get_the_permalink()); ?>" title="<?php echo esc_attr(get_the_title()); ?>"></a>
        </div><!-- .entry-top -->

        <div class="entry-content">
            <?php
            if (has_post_format('link') && thim_meta('thim_link_url') && thim_meta('thim_link_text')) {
                $url = thim_meta('thim_link_url');
                $text = thim_meta('thim_link_text');
                if ($url && $text) { ?>
                    <header class="entry-header">
                        <h3 class="entry-title">
                            <a class="link" href="<?php echo esc_url($url); ?>"><?php echo esc_html($text); ?></a>
                        </h3>
                    </header><!-- .entry-header -->
                    <?php
                }
                ?>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
                <div class="readmore">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html__('Read ', 'restaurant-wp'); ?></a>
                </div><!-- .read-more -->

            <?php } elseif (has_post_format('quote') && thim_meta('thim_quote_author_url')) {

                $author = thim_meta('thim_quote_author_text');
                $author_url = thim_meta('thim_quote_author_url');
                if ($author_url) {
                    $author = ' <a href=' . esc_url($author_url) . '>' . $author . '</a>';
                }
                ?>
                <header class="entry-header">
                    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                </header><!-- .entry-header -->
                <div class="entry-summary">
                    <?php if ($author) { ?>
                        <div class="box-header box-quote">
                            <blockquote><?php the_content(); ?><cite><?php echo wp_kses($author, array(
                                        'a' => array(
                                            'href' => array(),
                                        )
                                    )); ?></cite>
                            </blockquote>
                        </div>
                    <?php } ?>
                </div><!-- .entry-summary -->
                <div class="readmore">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html__('Read ', 'restaurant-wp'); ?></a>
                </div><!-- .read-more -->
                <?php
            } elseif (has_post_format('audio')) { ?>
                <header class="entry-header">
                    <div class="entry-meta">
                        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                        <?php thim_entry_meta(); ?>
                    </div>
                </header><!-- .entry-header -->
                <div class="entry-summary">
                    <?php
                    the_excerpt();
                    ?>
                </div><!-- .entry-summary -->
                <div class="readmore">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html__('Read More', 'restaurant-wp'); ?></a>
                </div><!-- .read-more -->

            <?php } elseif (has_post_format('chat')) { ?>
                <header class="entry-header">
                    <div class="entry-meta">
                        <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                        <?php thim_entry_meta(); ?>
                    </div>
                </header><!-- .entry-header -->
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-summary -->
                <div class="readmore">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html__('Read More', 'restaurant-wp'); ?></a>
                </div><!-- .read-more -->

            <?php } else { ?>

                <div class="entry-summary">
                    <?php
                    the_excerpt();
                    ?>
                </div><!-- .entry-summary -->
                <div class="readmore">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html__('KEEP READING', 'restaurant-wp'); ?></a>
                </div>
            <?php }
            ?>
        </div><!-- .entry-content -->
    </div> <!-- .content-inner -->
</article><!-- #post-## -->

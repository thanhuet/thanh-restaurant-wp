<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<?php
if ( have_posts() ) :?>
	<div class="blog-content blog-list archive_switch">
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();
			get_template_part( 'templates/template-parts/content' );
		endwhile;
		?>
	</div><!-- .blog-content.blog-list -->
	<?php
	thim_paging_nav();
else :
	get_template_part( 'templates/template-parts/content', 'none' );
endif;

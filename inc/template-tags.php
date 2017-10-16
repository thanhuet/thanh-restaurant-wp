<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 */

/**
 * author meta
 *
 * @return void
 */
function thim_entry_meta_author() {
	echo thim_get_entry_meta_author();
}

/**
 * Get author meta
 *
 * @return string
 */
function thim_get_entry_meta_author() {
	$html = '<span class="author vcard">';
	$html .= esc_html__( 'by ', 'thim-starter-theme' ) . sprintf( '<a href="%1$s" rel="author">%2$s</a>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), esc_html( get_the_author() ) ) . '';
	$html .= '</span>';

	return $html;
}

/**
 * date meta
 *
 * @return void
 */
function thim_entry_meta_date() {
	echo thim_get_entry_meta_date();
}


/**
 * Get date meta
 *
 * @return string
 */
function thim_get_entry_meta_date() {
	$html = '<span class="entry-date" style="font-weight: bold">' . get_the_date( 'F j, Y' ) . '</span>';

	return $html;
}


/**
 * Get category meta
 *
 * @return void
 */
function thim_entry_meta_category() {
	echo thim_get_entry_meta_category();
}

/**
 * Get category meta
 *
 * @return string
 */
function thim_get_entry_meta_category() {
	if  ( is_single() ){
		$html = '<span class="meta-category">';
		$html .= '<span>' . esc_html__( 'Categories: ', 'thim-starter-theme' ) . '</span>';
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$html .= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
		}
		$html .= '</span>';

		return $html;
	}
}

/**
 * Get tags meta
 *
 * @return void
 */
function thim_entry_meta_tags() {
	echo thim_get_entry_meta_tags();
}


/**
 * Get tags meta
 *
 * @return string
 */
function thim_get_entry_meta_tags() {
	$tags_list = get_the_tag_list( '', esc_html__( ', ', 'thim-starter-theme' ) );
	if ( $tags_list ) {
		return sprintf( '<span class="tags-links">' . esc_html__( 'Tag: %1$s', 'thim-starter-theme' ) . '</span>', $tags_list ); // WPCS: XSS OK.
	}

	return '';
}

/**
 * comment number
 *
 * @return void
 */
function thim_entry_meta_comment_number() {
	if ( comments_open() ) { ?>
		<span class="comment-total">
			<?php comments_popup_link( '0 Comment', '1 Comment', '% Comments', 'comments-link', 'Comments are off for this post' ); ?>
		</span>
		<?php
	}
}

/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 * @return string HTML for meta tags
 */
if ( ! function_exists( 'thim_entry_meta' ) ) :
	function thim_entry_meta() {
		echo '<div class="entry-meta">';

        if ( get_theme_mod( 'show_date_meta_tags', true ) ) :
            echo thim_get_entry_meta_date();
        endif;

		if ( get_theme_mod( 'show_author_meta_tags', true ) ) :
			echo thim_get_entry_meta_author();
		endif;

//		if ( get_theme_mod( 'show_category_meta_tags', true ) ) :
//			echo thim_get_entry_meta_category();
//		endif;

		if ( get_theme_mod( 'show_comment_meta_tags', true ) ) :
			thim_entry_meta_comment_number();
		endif;

		echo '</div>';
	}
endif;

/**
 * Get social share
 *
 * @return string
 */
if ( ! function_exists( 'thim_social_share' ) ) {
	function thim_social_share() {
		$thim_options = get_theme_mods();

		echo '<div class="share-click">';
		echo '<ul class="thim-social-share row">';
		do_action( 'thim_before_social_list' );

		if ( isset( $thim_options['group_sharing'] ) ) {
			$socials = get_theme_mod( 'group_sharing' );
		} else {
			$socials = array( 'facebook', 'twitter', 'pinterest', 'google', 'fancy' );
		}

		foreach ( $socials as $social ) {
			thim_render_social_link( $social );
		}

		do_action( 'thim_after_social_list' );
		echo '</ul>';
		echo '</div>';
	}
}

add_action( 'thim_social_share', 'thim_social_share' );

/**
 * Render social share
 *
 * @param $social_name
 *
 * @return string
 */
function thim_render_social_link( $social_name ) {
	switch ( $social_name ) {
		case 'twitter':
			echo '<li class="twitter">
				<a href="' . esc_url( get_permalink() ) . '" class="twitter-share-button">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>
			</li>';
			break;

		case 'facebook':
			echo '<li class="facebook">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, \'script\', \'facebook-jssdk\'));</script>
						<div class="fb-share-button" data-href="' . esc_url( get_the_permalink() ) . '" data-layout="button_count"></div>
					</li>';
			break;

		case 'pinterest':
			echo '<li class="pinterest">
				<a data-pin-do="buttonBookmark"  href="' . esc_url( "//www.pinterest.com/pin/create/button/" ) . '"><img src="' . esc_url( "//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" ) . '" alt="' . esc_html__( 'Pinterest', 'thim-starter-theme' ) . '"/></a>
				<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
			</li>';
			break;

		case 'google':
			echo '<li class="google-plus">
						<script src="' . esc_url( "https://apis.google.com/js/platform.js" ) . '" async defer></script>
						<div class="g-plusone" data-size="medium"></div>
					</li>';
			break;

		case 'fancy':
			echo '<li class="fancy">
							<script type="text/javascript" src="//fancy.com/fancyit/v2/fancyit.js" id="fancyit" async="async" data-count="right"></script>
						</li>';
			break;
		default:
			break;
	}
}

/**
 * Get pagination
 *
 * @return string
 */

if ( ! function_exists( 'thim_paging_nav' ) ) :

	/**
	 * Display navigation to next/previous set of posts when applicable.
	 */
	function thim_paging_nav() {
		global $wp_rewrite;
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		}
		$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args   = array();
		$url_parts    = explode( '?', $pagenum_link );

		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}

		$pagenum_link = esc_url( remove_query_arg( array_keys( $query_args ), $pagenum_link ) );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

		$format = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
		$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';
		// Set up paginated links.
		$links = paginate_links( array(
			'base'      => $pagenum_link,
			'format'    => $format,
			'total'     => $GLOBALS['wp_query']->max_num_pages,
			'current'   => $paged,
			'mid_size'  => 2,
			'add_args'  => array_map( 'urlencode', $query_args ),
			'prev_text' => '<i class="fa fa-angle-left"></i>',
			'next_text' => '<i class="fa fa-angle-right"></i>',
			'type'      => 'array'
		) );

		if ( $links ) : ?>
			<ul class="loop-pagination">
				<?php foreach ( $links as $link ) {
					echo '<li>' . $link . '</li>';
				} ?>
			</ul><!-- .pagination -->
		<?php endif;
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function thim_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'thim_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'thim_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so thim_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so thim_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in thim_categorized_blog.
 *
 * @return bool
 */
if ( ! function_exists( 'thim_category_transient_flusher' ) ) {
	function thim_category_transient_flusher() {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		// Like, beat it. Dig?
		delete_transient( 'thim_categories' );
	}
}
add_action( 'edit_category', 'thim_category_transient_flusher' );
add_action( 'save_post', 'thim_category_transient_flusher' );

/**
 * Change default comment fields
 *
 * @param $fields
 *
 * @return string
 */
if ( ! function_exists( 'thim_new_comment_fields' ) ) {
	function thim_new_comment_fields( $fields ) {
		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$aria_req  = ( $req ? 'aria-required=true' : '' );

		$fields = array(
			'author' => '<p class="comment-form-author">' . '<input placeholder="' . esc_attr__( 'Name...', 'thim-starter-theme' )  . '" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" ' . $aria_req . ' /></p>',
			'email'  => '<p class="comment-form-email">' . '<input placeholder="' . esc_attr__( 'Email...', 'thim-starter-theme' )  . '" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" ' . $aria_req . ' /></p>',
//			'url'    => '<p class="comment-form-url">' . '<input placeholder="' . esc_attr__( 'Website', 'thim-starter-theme' ) . '" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
		);

		return $fields;
	}
}
add_filter( 'comment_form_default_fields', 'thim_new_comment_fields' );

/**
 * Show list comments
 *
 * @return string
 */
if ( ! function_exists( 'thim_comment' ) ) {
	function thim_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		//extract( $args, EXTR_SKIP );
		if ( 'div' == $args['style'] ) {
			$tag       = 'div';
			$add_below = 'comment';
		} else {
			$tag       = 'li';
			$add_below = 'div-comment';
		}
		?>
		<<?php echo ent2ncr( $tag );
		echo ' '; ?><?php comment_class( 'description_comment' ) ?> id="comment-<?php comment_ID() ?>">
		<?php
		if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, 70 );
		} ?>
		<div class="content-comment">
			<div class="author">
				<?php printf( '<span class="author-name">%s</span>', get_comment_author_link() ) ?>
<!--				<span class="comment-extra-info">-->
<!--					--><?php
//					printf( get_comment_date() );
//					echo esc_html__( ' at ', 'thim-starter-theme' );
//					printf( get_comment_time() ) ?>
<!--				</span>-->
				<span>
					<?php comment_reply_link( array_merge( $args, array(
						'add_below' => $add_below,
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
                        'reply_text' => 'REPLY'
					) ) ) ?>
					<?php edit_comment_link( esc_html__( 'EDIT', 'thim-starter-theme' ), '', '' ); ?>
				</span>
			</div>
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'thim-starter-theme' ) ?></em>
			<?php endif; ?>
			<div class="message">
				<?php comment_text() ?>
			</div>
		</div>
		<div class="clear"></div>
		<?php
	}
}

/**
 *
 * Excerpt Length
 * @return string
 */
function thim_excerpt_length() {
	$thim_options = get_theme_mods();

	if ( isset( $thim_options['excerpt_archive_content'] ) ) {
		$length = get_theme_mod( 'excerpt_archive_content' );
	} else {
		$length = '50';
	}

	return $length;
}

add_filter( 'excerpt_length', 'thim_excerpt_length', 99999 );

/**
 * Change excerpt more
 * @return string
 */
function thim_excerpt_more() {
	return '...';
}

add_filter( 'excerpt_more', 'thim_excerpt_more' );

/**
 * Get related posts
 *
 * @return WP_Query
 */
function thim_get_related_posts() {
	global $post;
	$number_posts  = (int) get_theme_mod( 'blog_single_related_post_number', 3 );
	$tags          = wp_get_post_tags( $post->ID );
	$related_query = new WP_Query();

	if ( isset( $tags[0] ) ) {
		$first_tag = $tags[0]->term_id;

		$related_args  = array(
			'tag__in'             => array( $first_tag ),
			'post__not_in'        => array( $post->ID ),
			'posts_per_page'      => $number_posts,
			'ignore_sticky_posts' => 1
		);
		$related_query = new WP_Query( $related_args );
	}

	return $related_query;
}

/**
 * Get related columns class
 *
 * @param string $class
 *
 * @return string
 */
function thim_get_related_columns_class( $class = '' ) {
	return $class . ' col-md-' . ( 12 / get_theme_mod( 'blog_single_related_post_column', 3 ) );
}

/**
 * Get group chat content for post format chat
 *
 * @todo Should move function thim_meta to theme.
 *
 * @return string
 */
function thim_get_list_group_chat() {
	$group_chat = thim_meta( 'thim_group_chat' );
	foreach ( $group_chat as $key => $value ) {
		echo '<ul class="group-chat"><li>';
		echo '<span class="chat-name">' . esc_attr( $value['thim_chat_name'] ) . ':</span><span class="chat-message">' . esc_attr( $value['thim_chat_content'] ) . '</span>';
		echo '</li></ul>';
	}
}

/**
 * Get archive title
 *
 * Display the archive title based on the queried object.
 *
 * @return string
 */
if ( ! function_exists( 'thim_archive_title' ) ) :
	function thim_archive_title( $before = '', $after = '' ) {
		if ( is_category() ) {
			$title = sprintf( esc_html__( '%s', 'thim-starter-theme' ), single_cat_title( '', false ) );
		} elseif ( is_tag() ) {
			$title = sprintf( esc_html__( '%s', 'thim-starter-theme' ), single_tag_title( '', false ) );
		} elseif ( is_author() ) {
			$title = sprintf( esc_html__( '%s', 'thim-starter-theme' ), '<span class="vcard">' . get_the_author() . '</span>' );
		} elseif ( is_year() ) {
			$title = sprintf( esc_html__( 'Year: %s', 'thim-starter-theme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'thim-starter-theme' ) ) );
		} elseif ( is_month() ) {
			$title = sprintf( esc_html__( 'Month: %s', 'thim-starter-theme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'thim-starter-theme' ) ) );
		} elseif ( is_day() ) {
			$title = sprintf( esc_html__( 'Day: %s', 'thim-starter-theme' ), get_the_date( _x( 'F j, Y', 'daily archives date format', 'thim-starter-theme' ) ) );
		} elseif ( is_tax( 'post_format', 'post-format-aside' ) ) {
			$title = _x( 'Asides', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
			$title = _x( 'Galleries', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
			$title = _x( 'Images', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
			$title = _x( 'Videos', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
			$title = _x( 'Quotes', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
			$title = _x( 'Links', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
			$title = _x( 'Statuses', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
			$title = _x( 'Audio', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
			$title = _x( 'Chats', 'post format archive title', 'thim-starter-theme' );
		} elseif ( is_post_type_archive() ) {
			$title = sprintf( esc_html__( '%s', 'thim-starter-theme' ), post_type_archive_title( '', false ) );
		} elseif ( is_tax() ) {
			$tax = get_taxonomy( get_queried_object()->taxonomy );
			/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
			$title = sprintf( esc_html__( '%1$s: %2$s', 'thim-starter-theme' ), $tax->labels->singular_name, single_term_title( '', false ) );
		} elseif ( is_404() ) {
			$title = esc_html__( '404 Page', 'thim-starter-theme' );
		} elseif ( is_search() ) {
			$title = esc_html__( 'Search Results Page', 'thim-starter-theme' );
		} else {
			$title = esc_html__( 'Archives', 'thim-starter-theme' );
		}
		/**
		 * Filter the archive title.
		 *
		 * @param string $title Archive title to be displayed.
		 */
		if ( ! empty( $title ) ) {
			echo ent2ncr( $before . $title . $after );
		}
	}
endif;
/**
 * Get author social link
 *
 * @return string
 */
function thim_get_author_social_link() {
	$user = new WP_User( get_the_author_meta( 'ID' ) );

	$link_facebook  = get_the_author_meta( 'facebook' );
	$link_twitter   = get_the_author_meta( 'twitter' );
	$link_skype     = get_the_author_meta( 'skype' );
	$link_pinterest = get_the_author_meta( 'pinterest' );
	?>

	<ul class="thim-author-social">
		<?php if ( ! empty( $link_facebook ) ) { ?>
			<li>
				<a href="<?php echo esc_url( $link_facebook ); ?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
			</li>
		<?php } ?>

		<?php if ( ! empty( $link_twitter ) ) { ?>
			<li>
				<a href="<?php echo esc_url( $link_twitter ); ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
			</li>
		<?php } ?>

		<?php if ( ! empty( $link_skype ) ) { ?>
			<li>
				<a href="<?php echo esc_url( $link_skype ); ?>" target="_blank" class="skype"><i class="fa fa-skype"></i></a>
			</li>
		<?php } ?>

		<?php if ( ! empty( $link_pinterest ) ) { ?>
			<li>
				<a href="<?php echo esc_url( $link_pinterest ); ?>" target="_blank" class="pinterest"><i class="fa fa-pinterest"></i></a>
			</li>
		<?php } ?>
	</ul>
<?php }

/**
 * Get about the author
 *
 * @return string
 */
if ( ! function_exists( 'thim_about_author' ) ) {
	function thim_about_author() {
		$user = new WP_User( get_the_author_meta( 'ID' ) );
		$link = get_author_posts_url( get_the_author_meta( 'ID' ) );
		?>
		<div class="thim-about-author">
			<div class="author-wrapper">
				<div class="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
					<div class="author-top">
						<a class="name" href="<?php echo esc_url( $link ); ?>"> <?php echo get_the_author(); ?> </a>
						<?php if ( ! empty( $user->roles ) ) {
							echo '<div class="role">' . esc_html( $user->roles[0] ) . '</div>';
						} ?>
					</div>
				</div>
				<div class="author-bio">
					<div class="author-description">
						<?php echo get_the_author_meta( 'description' ); ?>
					</div>
					<?php thim_get_author_social_link(); ?>
				</div>
			</div>
		</div>
	<?php }
}

add_action( 'thim_about_author', 'thim_about_author' );

/**
 * Add field to user profile
 *
 * @param $contactmethods
 *
 * @todo escape text
 *
 * @return mixed
 */
function thim_modify_contact_methods( $contactmethods ) {

	//Add Facebook
	$contactmethods['facebook'] = 'Facebook';
	// Add Twitter
	$contactmethods['twitter'] = 'Twitter';
	// Add Twitter
	$contactmethods['skype'] = 'Skype';
	//Add Facebook
	$contactmethods['pinterest'] = 'Pinterest';

	return $contactmethods;
}

add_filter( 'user_contactmethods', 'thim_modify_contact_methods' );

/**
 * Move field comment bellow input fields
 *
 * @param $fields
 *
 * @return mixed
 */
function thim_move_comment_field_to_bottom( $fields ) {

	$comment_field = $fields['comment'];

	unset( $fields['comment'] );

	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'thim_move_comment_field_to_bottom' );

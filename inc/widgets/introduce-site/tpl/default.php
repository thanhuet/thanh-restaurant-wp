<?php
$style_item = $instance['style_item'];
if ( $style_item == 2 ){
?>
<div class="intro-site-container style-2">
	<?php
	}
	else{
	?>
    <div class="intro-site-container style-1">
		<?php
		}
		?>
        <div class="intro-title">
            <h2><?php echo $instance['title']; ?></h2>
        </div>
        <div class="intro-info">
            <h2>
				<?php echo $instance['information']; ?>
            </h2>
        </div>
		<?php if ( $style_item == 2 ) {
			$attachment = wp_get_attachment_image_src( $instance['style_icon'], 'full' );
			$image_url  = $attachment[0];
			$size_image = getimagesize( $image_url );
			$imageCrop  = $size_image[0] > 41 && $size_image[1] > 15 ? thim_aq_resize( $image_url, 41, 15, 1 ) : $image_url;
			?>
            <div class="icon-intro-site">
                <img src="<?php echo $imageCrop ?>">
            </div>
			<?php
		}
		?>
        <div class="intro-detail">
            <p>
				<?php echo $instance['detail']; ?>
            </p>
        </div>
		<?php if ( $instance['display_button'] ) {
			?>
            <a class="btn-intro-site"><?php echo esc_html__( 'about us', 'restaurant-wp' ); ?></a>
			<?php
		}
		?>
    </div>
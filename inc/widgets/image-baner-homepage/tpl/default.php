<?php
$attachment = wp_get_attachment_image_src( $instance['image'], 'full' );
$image_url  = $attachment[0];
?>
<div class="home-image-content">
	<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php esc_html__('Banner of page','restaurant-wp')?>">
</div>

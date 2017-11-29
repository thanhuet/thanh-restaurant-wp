<?php
$attachment = wp_get_attachment_image_src( $instance['image'], 'full' );
$image_url  = $attachment[0];
$size_image = getimagesize( $image_url );
$imageCrop  = $size_image[0] > 450 ? thim_aq_resize( $image_url, 450, 559, 1 ) : $image_url;
?>
<div class="home-image-content">
    <img src="<?php echo esc_url( $imageCrop ); ?>">
</div>

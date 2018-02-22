<?php
$attachment = wp_get_attachment_image_src($instance['image'], 'full');
$image_url = $attachment[0];
$size_image = getimagesize($image_url);
if ($image_url != null):
    $imageCrop = thim_aq_resize($image_url, 800, 500, 1);
endif;
?>
<div class="home-image-content">
    <img src="<?php echo esc_url($imageCrop); ?>">
</div>

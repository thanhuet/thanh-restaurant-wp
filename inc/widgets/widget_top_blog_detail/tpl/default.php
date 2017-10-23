<?php
    $attachment = wp_get_attachment_image_src($instance['image']);
    $url_image = $attachment['0'];
?>
<div class="widget-top-blog-detail">
    <div class="widget-logo-image-blog-detail"><img src="<?php echo $url_image; ?>"></div>

    <div class="widget-title-blog-detail"><p><?php echo esc_attr( $instance['title'] ) ?></p></div>

    <div class="widget-description-blog-detail"><?php echo esc_attr( $instance['description'] ) ?></div>
</div>
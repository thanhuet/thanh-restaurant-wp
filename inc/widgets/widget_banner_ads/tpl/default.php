<?php
$attachment = wp_get_attachment_image_src($instance['banner_image']);
$url_image = $attachment['0'];
?>
<div class="banner-ads">
    <div class="banner-image"><img src="<?php echo $url_image; ?>" alt="<?php echo esc_html__('Image For Site','restaurant-wp')?>"></div>
    <div class="banner-title">
        <div class="banner-title-detail"><p><?php echo esc_attr( $instance['title'] ) ?></div>
        <div class="banner-title-description"><p><?php echo esc_attr( $instance['description'] ) ?></div>
    </div>
</div>

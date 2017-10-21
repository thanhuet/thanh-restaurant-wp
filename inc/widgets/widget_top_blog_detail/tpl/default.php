<?php
    $attachment = wp_get_attachment_image_src($instance['image']);
    $url_image = $attachment['0'];
?>
<div>
    <div><img src="<?php echo $url_image; ?>"></div>

    <div><p><?php echo esc_attr( $instance['title'] ) ?></p></div>

    <div><?php echo esc_attr( $instance['description'] ) ?></div>
</div>
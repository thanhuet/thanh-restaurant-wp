<?php
$attachment = wp_get_attachment_image_src( $instance['image'],'full');
$image_url  = $attachment[0];
?>
<div class="home-image-content">
    <img src="<?php echo $image_url; ?>" alt="">
    <!--    --><?php /*echo var_dump($attachment);*/ ?>
</div>

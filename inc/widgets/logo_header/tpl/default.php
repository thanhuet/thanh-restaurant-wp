<?php
$attachment = wp_get_attachment_image_src($instance['title'],'full');
$url_icon = $attachment['0'];

?>
<div class="logo_header">
    <div class="logo">
        <img src="<?php echo $url_icon; ?>">
    </div>
    <div class="info_logo">
        <p><?php if($instance['display']) {
            echo $instance['description'];}
            else{
            echo '';} ?></p>
    </div>
</div>


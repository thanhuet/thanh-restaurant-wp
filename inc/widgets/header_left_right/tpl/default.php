<?php
$attachment = wp_get_attachment_image_src($instance['logo'],'full');
$url_icon = $attachment['0'];

?>
<div class="header_left_right">
    <div class="head_header">
        <div class="logo_header"><img src="<?php echo $url_icon; ?>"></div>
        <div class="title_logo"><?php echo $instance['title']?></div>
    </div>
    <div class="info_header"><?php echo $instance['infor_more']?></div>
    <div class="detail"><?php echo $instance['detail']?></div>
</div>
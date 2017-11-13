<?php
$attachment = wp_get_attachment_image_src( $instance['icon'],'full' );
$icon_url   = $attachment[0];
?>
<div class="icon-title-info">
    <img src="<?php echo $icon_url; ?>">
    <div class="title-info">
	    <?php echo $instance['title']; ?>
    </div>
</div>
<!--<hr>-->
<div class="main-content">
    <div class="content-info">
		<?php echo $instance['info']; ?>
    </div>
    <div class="detail-info">
		<?php echo $instance['detail']; ?>
    </div>
</div>

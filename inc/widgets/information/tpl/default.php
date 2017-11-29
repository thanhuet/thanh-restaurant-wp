<?php
$attachment = wp_get_attachment_image_src( $instance['icon'],'full' );
$icon_url   = $attachment[0];
?>
<div class="icon-title-info">
    <img src="<?php echo $icon_url; ?>" alt="<?php esc_html__('icon','restaurant-wp')?>">
    <div class="title-info">
	    <?php echo $instance['title']; ?>
    </div>
</div>
<!--<hr>-->
<div itemscope itemtype="http://schema.org/Restaurant" class="main-content">
    <div itemprop="openingHours address" class="content-info">
		<?php echo $instance['info']; ?>
    </div>
    <div itemprop="description" class="detail-info">
		<?php echo $instance['detail']; ?>
    </div>
</div>

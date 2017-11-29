<?php
$attachment = wp_get_attachment_image_src( $instance['image'],'full' );
$image_url  = $attachment[0];
?>
<div class="inverted-outer">
	<div  itemscope itemtype="http://schema.org/Restaurant" class="inverted-inner">
		<i class="inverted-top inverted-left"></i>
		<i class="inverted-top inverted-right"></i>
		<div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="inverted-content">
			<img itemprop="image" class="food-card-img" alt="<?php echo esc_html__('Food Image','restaurant-wp')?>" src="<?php echo esc_url($image_url);?>" >
			<h2 itemprop="name" class="food-card-name"><?php echo $instance['name'];?></h2>
			<p itemprop="description" class="food-card-des"><?php echo $instance['description'];?></p>
		</div>
		<i class="inverted-bottom inverted-right"></i>
		<i class="inverted-bottom inverted-left"></i>
	</div>
</div>
<?php
$attachment = wp_get_attachment_image_src( $instance['image'],'full' );
$image_url  = $attachment[0];
?>
<div class="inverted-outer">
	<div class="inverted-inner">
		<i class="inverted-top inverted-left"></i>
		<i class="inverted-top inverted-right"></i>
		<div class="inverted-content">
			<img class="food-card-img" src="<?php echo $image_url;?>">
			<h1 class="food-card-name"><?php echo $instance['name'];?></h1>
			<p class="food-card-des"><?php echo $instance['description'];?></p>
		</div>
		<i class="inverted-bottom inverted-right"></i>
		<i class="inverted-bottom inverted-left"></i>
	</div>
</div>
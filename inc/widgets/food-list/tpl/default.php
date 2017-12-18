<?php
$style_item = $instance['style_item'];
if ( ! empty( $instance['listFood'] ) ) {
	$repeater_items = $instance['listFood'];
}
if ( $style_item == 2 ){
?>
<div class="content-food-list-widget style-2">
	<?php
	}
	else{
	?>
    <div class="content-food-list-widget style-1">
		<?php
		}
		?>
    <div class="main-food-list">
        <div class="title-food-list">
            <h2><?php echo $instance['title']; ?></h2>
        </div>
        <div class="desc-food-list">
            <h2><?php echo $instance['description']; ?></h2>
        </div>
	    <?php if ( $style_item == 2 ) {
		    $attachment = wp_get_attachment_image_src( $instance['style_icon'], 'full' );
		    $image_url  = $attachment[0];
		    $size_image = getimagesize( $image_url );
		    $imageCrop  = $size_image[0] > 41 && $size_image[1] > 15 ? thim_aq_resize( $image_url, 41, 15, 1 ) : $image_url;
		    ?>
            <div class="icon-list-menu">
                <img src="<?php echo $imageCrop ?>">
            </div>
		    <?php
	    }
	    ?>
        <div itemscope itemtype="http://schema.org/Restaurant" class="detail-food-list">
			<?php
			foreach ( $repeater_items as $index => $repeater_item ) {
				?>
                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content-food-list ">
                    <p itemprop="name" class="food-name "><?php echo $repeater_item['repeat_content'] ?></p>
                    <div class="dots-background"></div>
                    <p itemprop="price" class="food-price "><?php echo $repeater_item['repeat_price'] ?></p>
                    <meta itemprop="priceCurrency" content="USD"/>
                </div>
				<?php
			}
			?>
        </div>
	    <?php if ( $instance['display_button'] ) {
	    ?>
        <a class="btn-food-list"><?php echo esc_html__('view more','restaurant-wp');?></a>
		    <?php
	    }
	    ?>
    </div>
</div>



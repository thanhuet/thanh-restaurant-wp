<?php
if ( ! empty( $instance['list_rate'] ) ) {
	$repeater_items = $instance['list_rate'];
}
?>
<div itemscope itemtype="http://schema.org/Restaurant" class="thim-testimonials owl-carousel owl-theme">
	<?php foreach ( $repeater_items as $index => $repeater_item ) {
		$attachment = wp_get_attachment_image_src( $repeater_item['image_profile'], 'full' );
		$image_url  = $attachment[0];
		?>
        <div class="customer-rate-demo row">
            <div itemprop="customer" itemscope itemtype="http://schema.org/Person" class="image-profile col-12 col-sm-3">
                <img itemprop="image" src="<?php echo $image_url; ?>" alt="">
            </div>
            <div itemprop="review" itemscope itemtype="http://schema.org/Review" class="info-rate col-12 col-sm-9">
                <div itemprop="description" class="customer-feedback">
                    <span class="special-word fa fa-quote-left"></span>
                    <p  class="customer-comment"><?php echo $repeater_item['comment']; ?></p>
                </div>
                <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="customer-rate-star">
                    <span itemprop="ratingValue" class="dashicons dashicons-star-filled"></span>
                    <span itemprop="ratingValue" class="dashicons dashicons-star-filled"></span>
                    <span itemprop="ratingValue" class="dashicons dashicons-star-filled"></span>
                    <span itemprop="ratingValue" class="dashicons dashicons-star-filled"></span>
                    <span itemprop="ratingValue" class="dashicons dashicons-star-filled"></span>
                </div>
                <div itemprop="customer" itemscope itemtype="http://schema.org/Person" class="customer-name">
                    <p itemprop="name" ><?php echo $repeater_item['name_customer']; ?></p>
                </div>
            </div>
        </div>
		<?php
	}
	?>
</div>


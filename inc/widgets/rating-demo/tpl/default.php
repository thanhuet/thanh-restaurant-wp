<?php
if ( ! empty( $instance['list_rate'] ) ) {
	$repeater_items = $instance['list_rate'];
}
?>
<div class="thim-testimonials owl-carousel owl-theme">
	<?php foreach ( $repeater_items as $index => $repeater_item ) {
		$attachment = wp_get_attachment_image_src( $repeater_item['image_profile'], 'full' );
		$image_url  = $attachment[0];
		?>
        <div class="customer-rate-demo row">
            <div class="image-profile col-3 col-xl-3">
                <img src="<?php echo $image_url; ?>">
            </div>
            <div class="info-rate col-9 col-xl-9">
                <div class="customer-feedback">
                    <span class="special-word fa fa-quote-left"></span>
                    <p class="customer-comment"><?php echo $repeater_item['comment']; ?></p>
                </div>
                <div class="customer-rate-star">
                    <span class="dashicons dashicons-star-filled"></span>
                    <span class="dashicons dashicons-star-filled"></span>
                    <span class="dashicons dashicons-star-filled"></span>
                    <span class="dashicons dashicons-star-filled"></span>
                    <span class="dashicons dashicons-star-filled"></span>
                </div>
                <div class="customer-name">
                    <p><?php echo $repeater_item['name_customer']; ?></p>
                </div>
            </div>
        </div>
		<?php
	}
	?>
</div>


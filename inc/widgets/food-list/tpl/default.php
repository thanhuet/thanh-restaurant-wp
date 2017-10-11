<?php
if ( ! empty( $instance['listFood'] ) ) {
	$repeater_items = $instance['listFood'];
}
?>
<div class="content-food-list-widget">
    <img class="img-food-list" src="<?php echo get_template_directory_uri() ?>/assets/images/food-list-img.png">
    <div class="main-food-list">
        <div class="title-food-list">
            <p><?php echo $instance['title']; ?></p>
        </div>
        <div class="desc-food-list">
            <p><?php echo $instance['description']; ?></p>
        </div>
        <div class="detail-food-list">
			<?php
			foreach ( $repeater_items as $index => $repeater_item ) {
				?>
                <div class="content-food-list">
                    <p><?php echo $repeater_item['repeat_content'] ?></p>
                </div>
				<?php
			}
			?>
        </div>
        <a class="btn-food-list">VIEW MORE</a>
    </div>
</div>



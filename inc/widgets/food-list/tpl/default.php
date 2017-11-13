<?php
if ( ! empty( $instance['listFood'] ) ) {
	$repeater_items = $instance['listFood'];
}
?>
<div class="content-food-list-widget">
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
                <div class="content-food-list ">
                    <p class="food-name "><?php echo $repeater_item['repeat_content'] ?></p>
                    <div class="dots-background"></div>
                    <p class="food-price "><?php echo $repeater_item['repeat_price'] ?></p>
                </div>
				<?php
			}
			?>
        </div>
        <a class="btn-food-list">VIEW MORE</a>
    </div>
</div>



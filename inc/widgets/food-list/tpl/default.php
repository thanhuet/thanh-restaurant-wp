<?php
if ( ! empty( $instance['listFood'] ) ) {
	$repeater_items = $instance['listFood'];
}
?>
<div class="content-food-list-widget">
    <div class="main-food-list">
        <div class="title-food-list">
            <h1><?php echo $instance['title']; ?></h1>
        </div>
        <div class="desc-food-list">
            <h1><?php echo $instance['description']; ?></h1>
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
        <a class="btn-food-list"><?php echo esc_html__('VIEW MORE','thim-starter-theme');?></a>
    </div>
</div>



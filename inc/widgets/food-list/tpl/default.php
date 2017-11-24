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
        <div itemscope itemtype="http://schema.org/Restaurant" class="detail-food-list">
			<?php
			foreach ( $repeater_items as $index => $repeater_item ) {
				?>
                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="content-food-list ">
                    <p itemprop="name" class="food-name "><?php echo $repeater_item['repeat_content'] ?></p>
                    <div class="dots-background"></div>
                    <p itemprop="price" class="food-price "><?php echo $repeater_item['repeat_price'] ?></p>
                    <meta itemprop="priceCurrency"/>
                </div>
				<?php
			}
			?>
        </div>
        <a class="btn-food-list"><?php echo esc_html__('VIEW MORE','restaurant-wp');?></a>
    </div>
</div>



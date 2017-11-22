<?php
if ( ! empty( $instance['repeater-content'] ) ) {
	$repeater_items = $instance['repeater-content'];
}
?>
<div class="title-info-footer">
    <p><?php echo $instance['title']; ?></p>
</div>
<?php
foreach ( $repeater_items as $index => $repeater_item ) {
	?>
    <div itemscope itemtype="http://schema.org/Restaurant" class="content-opening-hours">
        <p class="day-of-week"><?php echo $repeater_item['repeat_day'] ?></p>
        <div class="dots-background"></div>
        <p itemprop="openingHours" class="open-hours-detail"><?php echo $repeater_item['repeat_hours'] ?></p>
    </div>
	<?php
}
?>

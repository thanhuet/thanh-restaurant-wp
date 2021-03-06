<?php
if ( ! empty( $instance['repeater-content'] ) ) {
	$repeater_items = $instance['repeater-content'];
}
?>
<div class="title-info-footer">
    <h6><?php echo $instance['title']; ?></h6>
</div>
<?php
foreach ( $repeater_items as $index => $repeater_item ) {
	if ( $instance['displaytitle'] ) {
		?>
        <div class="title-content-footer">
            <p><?php echo $repeater_item['repeat_title'] ?></p>
        </div>
		<?php
	}
	?>
    <div itemscope itemtype="http://schema.org/Restaurant" class="info-content-footer">
        <p itemprop="telephone address email"><?php echo $repeater_item['repeat_content']?></p>
    </div>
	<?php
}
?>

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
	if ( $instance['displaytitle'] ) {
		?>
        <div class="title-content-footer">
            <p><?php echo $repeater_item['repeat_title'] ?></p>
        </div>
		<?php
	}
	?>
    <div class="info-content-footer">
        <p><?php echo $repeater_item['repeat_content']?></p>
    </div>
	<?php
}
?>

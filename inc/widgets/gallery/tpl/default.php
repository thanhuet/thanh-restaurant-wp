<?php
$attachmentIcon = wp_get_attachment_image_src( $instance['style_icon'], 'full' );
$icon_url       = $attachmentIcon[0];
$size_icon      = getimagesize( $icon_url );
$iconCrop       = $size_icon[0] > 41 && $size_icon[1] > 15 ? thim_aq_resize( $icon_url, 41, 15, 1 ) : $icon_url;

$col      = $instance['column'];
$colIndex = 12 / $col;
$colStyle = 'col-md-' . (string) $colIndex;

$args_query = array(
	'post_type' => 'post',
	'tax_query' => array(
		array(
			'taxonomy' => 'post_format',
			'field'    => 'slug',
			'terms'    => array( 'post-format-gallery' ),
		),
	),
);

?>
    <div class="thim-gallery-header">
        <div class="thim-gallery-title">
            <h3><?php echo $instance['title']; ?></h3>
        </div>
        <div class="thim-gallery-info">
            <h4>
				<?php echo $instance['description']; ?>
            </h4>
        </div>
        <div class="icon-thim-gallery">
            <img src="<?php echo $iconCrop ?>">
        </div>
    </div>
<?php
$query = new WP_Query( $args_query );
while ( $query->have_posts() ) {

        $images = thim_post_meta( 'thim_gallery', array(
		'type'   => 'image',
		'single' => 'false',
		'size'   => $image_size
	) );
}

?>
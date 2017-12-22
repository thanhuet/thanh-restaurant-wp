<?php
$attachmentIcon = wp_get_attachment_image_src( $instance['style_icon'], 'full' );
$icon_url       = $attachmentIcon[0];
$size_icon      = getimagesize( $icon_url );
$iconCrop       = $size_icon[0] > 41 && $size_icon[1] > 15 ? thim_aq_resize( $icon_url, 41, 15, 1 ) : $icon_url;

$col      = $instance['column'];
$colIndex = 12 / $col;
$colStyle = 'col-md-' . (string) $colIndex;

$limitPost  = $instance['number_image'];
$numberPost = 0;

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
?>
<div class="content-gallery row">
	<?php
	while ( $query->have_posts() ) {
		$query->the_post();
		$temp          = array();
		$data          = array();
		$attachment_id = get_post_meta( get_post()->ID, 'thim_gallery', false );
		foreach ( $attachment_id as $k => $v ) {
			$image_attributes = wp_get_attachment_image_src( $v, $args['size'] );
			$temp['url']      = $image_attributes[0];
			$data[]           = $temp;
		}
		for ( $i = 0; $i < count( $data ); $i ++ ) {
			if ( $numberPost > $limitPost ) {
				break;
			} else {
				$imageUrl  = $data[ $i ]['url'];
				$sizeImage = getimagesize( $imageUrl );
				$imageCrop = $sizeImage[0] > 400 && $sizeImage[1] > 500 ? thim_aq_resize( $imageUrl, 400, 500, 1 ) : $imageUrl;
				?>
                <div class="img-widget-gallery <?php echo $colStyle ?> ">
                    <a href="<?php echo get_post_permalink(get_post()->ID)?>">
                        <img src="<?php echo $imageCrop ?>" title="<?php echo get_post()->post_name ?>" alt="<?php echo get_post()->post_name ?>">
                    </a>
                </div>
				<?php
				$numberPost ++;
//			var_dump( $sizeImage );
			}
		}
	}
	?>
</div>

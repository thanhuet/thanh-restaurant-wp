<?php
$attachment = wp_get_attachment_image_src($instance['image'], 'full');
$image_url = $attachment[0];
$item_style = $instance['style_item'];

?>
<?php if ($item_style == 'style_2'){
$imageCrop = thim_aq_resize($image_url, 250, 280, 1);
?>
<div class="inverted-outer style-2">
    <?php
    }else{
    $imageCrop = $image_url;
    ?>
    <div class="inverted-outer style-1">
        <?php }
        ?>

        <div itemscope itemtype="http://schema.org/Restaurant" class="inverted-inner">
            <i class="inverted-top inverted-left"></i>
            <i class="inverted-top inverted-right"></i>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="inverted-content">
                <div class="card-img">
                    <img itemprop="image" class="food-card-img"
                         alt="<?php echo esc_html__('Food Image', 'restaurant-wp') ?>"
                         src="<?php echo esc_url($imageCrop); ?>">
                </div>
                <h2 itemprop="name" class="food-card-name"><?php echo $instance['name']; ?></h2>
                <p itemprop="description" class="food-card-des"><?php echo $instance['description']; ?></p>
                <?php if ($item_style == 'style_2') { ?>
                    <div class="under-line">

                    </div>
                    <?php
                }
                ?>
            </div>
            <i class="inverted-bottom inverted-right"></i>
            <i class="inverted-bottom inverted-left"></i>
        </div>
    </div>
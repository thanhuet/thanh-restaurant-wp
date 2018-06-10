<?php
$attachmentIcon = wp_get_attachment_image_src($instance['style_icon'], 'full');
$icon_url = $attachmentIcon[0];
$size_icon = getimagesize($icon_url);
$iconCrop = $size_icon[0] > 41 && $size_icon[1] > 15 ? thim_aq_resize($icon_url, 41, 15, 1) : $icon_url;
if (!empty($instance['listEmploy'])) {
    $repeater_items = $instance['listEmploy'];
}
$col = $instance['column'];
$colIndex = 12 / $col;
$colStyle = 'col-md-' . (string)$colIndex;
?>
<div class="intro-em-header">
    <div class="intro-em-title">
        <h3><?php echo $instance['title']; ?></h3>
    </div>
    <div class="intro-em-info">
        <h4>
            <?php echo $instance['description']; ?>
        </h4>
    </div>
    <div class="icon-intro-em">
        <img src="<?php echo $iconCrop ?>">
    </div>
</div>
<div class="intro-em-body row">
    <?php
    foreach ($repeater_items as $index => $repeater_item) {
        $attachment = wp_get_attachment_image_src($repeater_item['repeat_img_profile'], 'full');
        $image_url = $attachment[0];
        $size_image = getimagesize($image_url);
        $imageCrop = $size_image[0] > 370 && $size_image[1] > 450 ? thim_aq_resize($image_url, 370, 450, 1) : $image_url;
        ?>
        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer"
             class="content-intro-em <?php echo $colStyle ?>">
            <div class="content-intro-em-img">
                <img src="<?php echo $imageCrop ?>" alt="<?php echo esc_html__('Image Profile', 'restaurant-wp') ?>"/>
            </div>
            <h5 itemprop="name" class="employee-name "><?php echo $repeater_item['repeat_name'] ?></h5>
            <p itemprop="price" class="employee-info "><?php echo $repeater_item['repeat_info'] ?></p>
            <div class="under-line"></div>
            <meta itemprop="priceCurrency" content="USD"/>
        </div>
        <?php
    }
    ?>
</div>
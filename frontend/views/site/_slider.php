<?php


use common\models\Slider;

$sliders = Slider::find()->where(['status' => Slider::STATUS_ACTIVE])->all();

?>


<!-- Slider Area Start -->
<div class="slider-area pb-100">
    <!-- Main Slider Area Start -->
    <div class="slider-wrapper theme-default">
        <!-- Slider Background  Image Start-->
        <div id="slider" class="nivoSlider">
            <?php foreach ($sliders as $key => $slider): ?>
                <img src="<?= $slider->img; ?>" data-thumb="<?= $slider->img; ?>" alt=""
                     title="#htmlcaption<?= $key; ?>"/>
            <?php endforeach; ?>
        </div>
        <!-- Slider Background  Image Start-->
        <!-- Slider htmlcaption Start-->
        <?php foreach ($sliders as $key => $slider): ?>
            <div id="htmlcaption<?=$key;?>" class="nivo-html-caption slider-caption">
                <!-- Slider Text Start -->
                <div class="slider-text">
                    <?=$slider->content;?>
                </div>
                <!-- Slider Text End -->
            </div>
        <?php endforeach; ?>
        <!-- Slider htmlcaption End -->
    </div>
    <!-- Main Slider Area End -->
</div>
<!-- Slider Area End -->

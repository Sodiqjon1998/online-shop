<?php


use common\models\Product;

$newProducts = Product::find()->where(['status' => Product::STATUS_ACTIVE])->orderBy(['id' => SORT_DESC])->all();

?>


<!-- New Products Selection Start -->
<div class="new-products-selection pb-80">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-xs-12">
                <div class="section-title text-center mb-40">
                    <span class="section-desc mb-15">Top new in this week</span>
                    <h3 class="section-info">new products</h3>
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- New Products Activation Start -->
                <div class="new-products owl-carousel">
                    <!-- Double Product Start -->
                    <?php foreach ($newProducts as $key => $newProduct): ?>
                        <div class="double-products">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <!-- Product Image Start -->
                                <div class="pro-img">
                                    <a href="product-page.html">
                                        <?php foreach ($newProduct->twoimage() as $k => $value): ?>
                                            <img class="<?= $k == 0 ? 'primary-img' : 'secondary-img'?>" src="<?= $value ?>" alt="single-product">
                                        <?php endforeach; ?>
                                    </a>
                                    <div class="quick-view">
                                        <a href="#" data-toggle="modal" data-target="#myModal"><i class="pe-7s-look"></i>quick view</a>
                                    </div>
                                    <span class="sticker-new">new</span>
                                </div>
                                <!-- Product Image End -->
                                <!-- Product Content Start -->
                                <div class="pro-content text-center">
                                    <h4><a href="product-page.html"><?= $newProduct->title ?></a></h4>
                                    <p class="price"><span>$<?=$newProduct->price;?></span></p>
                                    <div class="action-links2">
                                        <a data-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                    </div>
                                </div>
                                <!-- Product Content End -->
                            </div>
                            <!-- Single Product End -->
                        </div>
                    <?php endforeach; ?>
                    <!-- Double Product End -->
                </div>
                <!-- New Products Activation End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- New Products Selection End -->
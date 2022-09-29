<?php


use common\models\Product;

$bestSellers = Product::find()->where(['status' => Product::STATUS_ACTIVE])->all();
?>


<!-- Best Seller Products Start -->
<div class="best-seller-products pb-100">
    <div class="container">
        <div class="row">
            <!-- Section Title Start -->
            <div class="col-xs-12">
                <div class="section-title text-center mb-40">
                    <span class="section-desc mb-20">Top sale in this week</span>
                    <h3 class="section-info">best seller</h3>
                </div>
            </div>
            <!-- Section Title End -->
        </div>
        <!-- Row End -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Best Seller Product Activation Start -->
                <div class="best-seller new-products owl-carousel">
                    <!-- Single Product Start -->
                    <?php foreach ($bestSellers as $key => $seller): ?>
                        <div class="single-product">
                            <!-- Product Image Start -->
                            <div class="pro-img">
                                <a href="product-page.html">
                                    <?php foreach ($seller->twoimage() as $k => $value): ?>
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
                                <h4><a href="product-page.html"><?=$seller->title;?></a></h4>
                                <p class="price"><span>$<?=$seller->price;?></span></p>
                                <div class="action-links2">
                                    <a data-toggle="tooltip" title="Add to Cart" href="cart.html">add to cart</a>
                                </div>
                            </div>
                            <!-- Product Content End -->
                        </div>
                    <?php endforeach; ?>
                    <!-- Single Product End -->
                </div>
                <!-- Best Seller Product Activation Start -->
                <div class="text-center shop-link-page mt-50"><a href="best-seller.html">Shop All Best Sellers</a></div>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Best Seller Products End -->

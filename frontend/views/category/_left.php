<?php

use common\models\Category;
use common\models\ColorCategory;
use common\models\ManufactureCategory;
use yii\helpers\Url;


$categories = Category::find()
    ->where(['status' => Category::STATUS_ACTIVE])
    ->all();
$colorCategories = ColorCategory::find()
    ->where(['status' => ColorCategory::STATUS_ACTIVE])
    ->all();
$manufactureCategories = ManufactureCategory::find()
    ->where(['status' => ManufactureCategory::STATUS_ACTIVE])
    ->all();
?>


<!-- Sidebar Start -->
<div class="col-md-3 col-md-pull-9">
    <aside class="categorie-sidebar mb-100">
        <!-- Categories Module Start -->
        <div class="categorie-module mb-80">
            <h3>categories</h3>
            <ul class="categorie-list">
                <?php foreach ($categories as $category): ?>
                    <li><a href="<?= Url::to(['categories', 'id' => $category->id]) ?>"><?= $category->title; ?>
                            (<?= $category->getProductCount(); ?>)</a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Categories Module End -->
        <!-- Filter Option Start -->
        <div class="flter-option mb-80">
            <h3>PRICE FILTER</h3>
            <form action="#">
                <div id="slider-range"></div>
                <input type="text" id="amount" class="amount" readonly>
            </form>
        </div>
        <!-- Filter Option End -->
        <!-- Categories Color Start -->
        <div class="cat-color mb-80">
            <h3>Color</h3>
            <ul class="cat-color-list">
                <?php foreach ($colorCategories as $colorCategory): ?>
                    <li>
                        <a href="<?= Url::to(['category/categories', 'id' => $colorCategory->id]); ?>"><?= $colorCategory->title; ?>
                            (<?= $colorCategory->getProductCount(); ?>)</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Categories Color End -->
        <!-- Manufactures List Start -->
        <div class="manufactures mb-80">
            <h3>MANUFACTURERS</h3>
            <ul class="manufactures-list">
                <?php foreach ($manufactureCategories as $manufactureCategory): ?>
                    <li><a href="<?=Url::to(['category/categories', 'id' => $manufactureCategory->id]);?>"><?=$manufactureCategory->title;?> (<?=$manufactureCategory->getProductCount();?>)</a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- Manufactures List End -->
        <!-- Most Viewed Product Start -->
        <div class="most-viewed">
            <h3>most viewed</h3>
            <!-- Most Viewed Product Activation Start -->
            <div class="most-viewed-product owl-carousel">
                <!-- Triple Product Start -->
                <div class="triple-product">
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/2_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/2_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                            <p class="price"><span>$122.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/3_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/3_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="product-page.html">congue sitamet</a></h4>
                            <p class="price"><span>$2000.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/4_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/2_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="product-page.html">dictum idrisus</a></h4>
                            <p class="price"><span>$602.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                </div>
                <!-- Triple Product End -->
                <!-- Triple Product Start -->
                <div class="triple-product">
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/4_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/2_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                            <p class="price"><span>$122.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/2_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/2_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="product-page.html">congue sitamet</a></h4>
                            <p class="price"><span>$2000.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/3_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/3_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="product-page.html">dictum idrisus</a></h4>
                            <p class="price"><span>$602.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                </div>
                <!-- Triple Product End -->
                <!-- Triple Product Start -->
                <div class="triple-product">
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/2_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/2_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="product-page.html">Carte Postal Clock</a></h4>
                            <p class="price"><span>$122.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/3_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/3_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="product-page.html">congue sitamet</a></h4>
                            <p class="price"><span>$2000.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product mb-25">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product-page.html">
                                <img class="primary-img" src="<?= Url::base(); ?>/img/new-products/4_1.jpg"
                                     alt="single-product">
                                <img class="secondary-img" src="<?= Url::base(); ?>/img/new-products/2_2.jpg"
                                     alt="single-product">
                            </a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <h4><a href="#">dictum idrisus</a></h4>
                            <p class="price"><span>$602.00</span></p>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                </div>
                <!-- Triple Product End -->
            </div>
            <!-- Most Viewed Product Activation End -->
        </div>
        <!-- Most Viewed Product End -->
    </aside>
</div>
<!-- Sidebar End -->
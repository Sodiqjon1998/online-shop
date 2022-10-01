<?php
/* @var $products \common\models\Product */

/* @var $dataProvider \yii\data\ActiveDataProvider */

use yii\bootstrap4\LinkPager;
use yii\helpers\Url;

?>


<!-- Sidebar Content Start -->
<div class="col-md-9 col-md-push-3">
    <!-- Sidebar Right Top Content Start -->
    <div class="sidebar-desc-content">
        <p>Example of category description text</p>
        <hr>
    </div>
    <!-- Sidebar Right Top Content Start -->
    <!-- Best Seller Product Start -->
    <div class="best-seller">
        <div class="row mt-20">
            <div class="col-md-3 col-sm-4 pull-left">
                <div class="grid-list-view">
                    <ul class="list-inline">
                        <li class="active"><a data-toggle="tab" href="#grid-view" aria-expanded="true"><i
                                        class="zmdi zmdi-view-dashboard"></i><i class="pe-7s-keypad"></i></a></li>
                        <li><a data-toggle="tab" href="#list-view" aria-expanded="false"><i
                                        class="zmdi zmdi-view-list"></i><i class="pe-7s-menu"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-5 pull-right">
                <select name="shorer" id="shorter" class="form-control select-varient">
                    <option value="#">Sort By:Default</option>
                    <option value="#">Sort By:Name (A - Z)</option>
                    <option value="#">Sort By:Name (Z - A)</option>
                    <option value="#">Sort By:Price (Low > High)</option>
                    <option value="#">Sort By:Price (High > Low)</option>
                    <option value="#">Sort By:Rating (Highest)</option>
                    <option value="#">Sort By:Rating (Lowest)</option>
                    <option value="#">Sort By:Model (A - Z)</option>
                    <option value="#">Sort By:Model (Z - A)</option>
                </select>
            </div>
            <div class="col-md-3 col-sm-3 pull-right">
                <select name="shorter" id="#" class="form-control select-varient">
                    <option value="#">Show: 9</option>
                    <option value="#">Show: 25</option>
                    <option value="#">Show: 50</option>
                    <option value="#">Show: 75</option>
                    <option value="#">Show: 100</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="tab-content categorie-list ">
                    <div id="list-view" class="tab-pane fade">
                        <div class="row">
                            <!-- Main Single Product Start -->
                            <?php foreach ($products as $product): ?>
                                <div class="main-single-product fix">
                                    <div class="col-sm-4">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="<?=Url::to(['category/product-detail', 'id' => $product->id]);?>">
                                                    <img class="primary-img" src="<?= $product->image(); ?>"
                                                         alt="single-product">
                                                </a>
                                                <div class="quick-view">
                                                    <a href="#" data-toggle="modal" data-target="#myModal"><i
                                                                class="pe-7s-look"></i>quick view</a>
                                                </div>
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Product Image End -->
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    <div class="col-sm-8">
                                        <!-- Product Content Start -->
                                        <div class="thubnail-desc fix">
                                            <h4 class="product-header">
                                                <a href="<?=Url::to(['category/product-detail', 'id' => $product->id]);?>"><?= $product->title; ?></a>
                                            </h4>
                                            <!-- Product Price Start -->
                                            <div class="pro-price mb-15">
                                                <ul class="pro-price-list">
                                                    <li class="price">$<?= $product->price; ?></li>
                                                    <li class="mtb-50">
                                                        <p><?= $product->content; ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Product Price End -->
                                            <!-- Product Button Actions Start -->
                                            <div class="product-button-actions">
                                                <button class="add-to-cart" data-toggle="tooltip" title="Add to Cart">
                                                    add to cart
                                                </button>
                                                <a href="wish-list.html" data-toggle="tooltip" title="Add to Wishlist"
                                                   class="same-btn mr-15"><i class="pe-7s-like"></i></a>
                                                <button data-toggle="tooltip" title="Compare this Product"
                                                        class="same-btn"><i class="pe-7s-repeat"></i></button>
                                            </div>
                                            <!-- Product Button Actions End -->
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- Main Single Product Start -->
                        </div>
                        <!-- Row End -->
                        <div class="row mt-40 mb-70">
                            <div class="col-sm-6">
                                <ul>
                                    <?= LinkPager::widget([
                                        'pagination' => $dataProvider->pagination
                                    ]); ?>
                                </ul>
                                <!-- End of .blog-pagination -->
                            </div>
                            <div class="col-sm-6">
                                <div class="pro-list-details text-right">
                                    <p class="mr-15 mt-10">Showing <?= $dataProvider->getCount(); ?>
                                        to <?= Yii::$app->request->get('page') ?>
                                        of <?= $dataProvider->getTotalCount(); ?>
                                        (<?= $dataProvider->pagination->pageCount; ?> Pages)</p>
                                </div>
                                <!-- Pro List Details End -->
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- #list-view End -->
                    <div id="grid-view" class="tab-pane fade in active mt-40">
                        <div class="row">
                            <?php foreach ($products as $product): ?>
                                <div class="col-md-4 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="<?=Url::to(['category/product-detail', 'id' => $product->id]);?>">
                                                <?php foreach ($product->twoimage() as $key => $value): ?>
                                                    <img class="<?= $key == 0 ? 'primary-img' : 'secondary-img'; ?>"
                                                         src="<?= $value; ?>"
                                                         alt="single-product">
                                                <?php endforeach; ?>
                                            </a>
                                            <div class="quick-view">
                                                <a href="#" data-toggle="modal" data-target="#myModal"><i
                                                            class="pe-7s-look"></i>quick view</a>
                                            </div>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content text-center">
                                            <h4><a href="<?=Url::to(['category/product-detail', 'id' => $product->id]);?>"><?=$product->title;?></a></h4>
                                            <p class="price"><span>$<?=$product->price;?></span></p>
                                            <div class="action-links2">
                                                <a data-toggle="tooltip" title="Add to Cart" href="cart.html">add to
                                                    cart</a>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Row End -->
                        <div class="row mt-40 mb-70">
                            <div class="col-sm-6">
                                <ul>
                                    <?= LinkPager::widget([
                                        'pagination' => $dataProvider->pagination,
                                    ]); ?>
                                </ul>
                                <!-- End of .blog-pagination -->
                            </div>
                            <div class="col-sm-6">
                                <div class="pro-list-details text-right">
                                    <p class="mr-15 mt-10">Showing <?=$dataProvider->getCount();?> to <?=Yii::$app->request->get('page');?> of <?=$dataProvider->getTotalCount();?> (<?=$dataProvider->pagination->pageCount;?> Pages)</p>
                                </div>
                                <!-- Pro List Details End -->
                            </div>
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- #Grid-view End -->
                </div>
                <!-- .Tab Content End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Best Seller Product End -->
</div>
<!-- Sidebar Content End -->
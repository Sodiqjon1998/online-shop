<?php
/* @var $productOne \common\models\Product */
/* @var $model \common\models\ProductCommit */

$this->title = $productOne->title;
$this->params['breadcrumbs'][] = ['label' => "Categories", 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_breadcrumb'); ?>

    <!-- Product Thumbnail Start -->
    <div class="main-product-thumbnail pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <img id="big-img" src="<?= $productOne->image(); ?>" data-zoom-image="<?= $productOne->image(); ?>"
                         alt="product-image"/>

                    <div id="small-img" class="mt-20">

                        <div class="thumb-menu owl-carousel">
                            <?php foreach ($productOne->images() as $key => $img): ?>
                                <a href="#" data-image="<?= $img; ?>"
                                   data-zoom-image="<?= $img; ?>">
                                    <img src="<?= $img; ?>" alt="product-image"/>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Thumbnail Description Start -->
                <div class="col-sm-7">
                    <div class="thubnail-desc fix">
                        <h2 class="product-header"><?= $productOne->title; ?></h2>
                        <!-- Product Rating Start -->
                        <div class="rating-summary fix mtb-20">
                            <div class="rating f-left mr-10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="rating-feedback f-left">
                                <a href="#">0 reviews</a> /
                                <a href="#">Write a review</a>
                            </div>
                        </div>
                        <!-- Product Rating End -->
                        <!-- Product Price Start -->
                        <div class="pro-price mb-20">
                            <ul class="pro-price-list">
                                <li class="price">$<?= $productOne->price; ?></li>
                                <li class="tax">Ex Tax: $<?= $productOne->discount; ?></li>
                            </ul>
                        </div>
                        <!-- Product Price End -->
                        <!-- Product Price Description Start -->
                        <div class="product-price-desc">
                            <ul class="pro-desc-list">
                                <li>Product Code: <span><?= $productOne->product_code; ?></span></li>
                                <li>Reward Points: <span><?= $productOne->reward_points; ?></span></li>
                                <li>Availability: <span><?= $productOne->availability; ?></span></li>
                            </ul>
                        </div>
                        <!-- Product Price Description End -->
                        <!-- Product Box Quantity Start -->
                        <div class="box-quantity mtb-20">
                            <div class="quantity-item">
                                <label>Qty: </label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="0">
                                </div>
                            </div>
                        </div>
                        <!-- Product Box Quantity End -->
                        <!-- Product Button Actions Start -->
                        <div class="product-button-actions">
                            <button class="add-to-cart">add to cart</button>
                            <a href="wish-list.html" data-toggle="tooltip" title="Add to Wishlist"
                               class="same-btn mr-15"><i
                                        class="pe-7s-like"></i></a>
                            <button data-toggle="tooltip" title="Compare this Product" class="same-btn"><i
                                        class="pe-7s-repeat"></i></button>
                        </div>
                        <!-- Product Button Actions End -->
                        <!-- Product Social Link Share Start -->
                        <div class="social-shared">
                            <ul>
                                <li class="f-book">
                                    <a href="#">
                                        <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                        <span>like</span>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                        <span>tweet</span>
                                    </a>
                                </li>
                                <li class="pinterest">
                                    <a href="#">
                                        <span><i class="fa fa-google" aria-hidden="true"></i></span>
                                        <span>plus</span>
                                    </a>
                                </li>
                                <!-- Product Social Link Share Dropdown Start -->
                                <li class="share-post">
                                    <a href="#">
                                        <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                                        <span>share</span>
                                    </a>
                                    <ul class="sharable-dropdown">
                                        <li><a href="#"><i class="fa fa-facebook-official"
                                                           aria-hidden="true"></i>facebook</a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square"
                                                           aria-hidden="true"></i>twitter</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-print" aria-hidden="true"></i>print</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>email</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-pinterest-square"
                                                           aria-hidden="true"></i>pinterest</a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square"
                                                           aria-hidden="true"></i>google+</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>more(99)</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Product Social Link Share Dropdown End -->
                            </ul>
                        </div>
                        <!-- Product Social Link Share End -->
                    </div>
                </div>
                <!-- Thumbnail Description End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Product Thumbnail End -->


<?= $this->render('_product-content', [
    'model' => $model,
        'productOne' => $productOne,
]); ?>


<?= $this->render('@frontend/views/site/_best-seller'); ?>
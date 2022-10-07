<?php
/* @var $productOne \common\models\Product */

/* @var $model \common\models\ProductCommit */

use yii\bootstrap4\ActiveForm;
use yii2mod\rating\StarRating;


?>


<!-- Product Thumbnail Description Start -->
<div class="thumnail-desc pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="main-thumb-desc text-center list-inline">
                    <li class="active"><a data-toggle="tab" href="#detail">Details</a></li>
                    <li><a data-toggle="tab" href="#review">Reviews (<?= $productOne->review_count; ?>)</a></li>
                </ul>
                <!-- Product Thumbnail Tab Content Start -->
                <div class="tab-content thumb-content">
                    <div id="detail" class="tab-pane fade in active pb-40">
                        <p class="mb-10"><?= $productOne->content; ?></p>
                    </div>
                    <div id="review" class="tab-pane fade">
                        <!-- Reviews Start -->
                        <div class="review">
                            <p class="mb-10">There are no reviews for this product.</p>
                            <h2>WRITE A REVIEW</h2>
                        </div>
                        <!-- Reviews End -->
                        <!-- Reviews Field Start -->
                        <div class="riview-field mt-30">
                            <?php $form = ActiveForm::begin(['options' => ['autocomplete' => 'off']]); ?>
                            <div class="form-group">
                                <label class="req" for="sure-name">name</label>
                                <?= $form->field($model, 'name')->textInput(['class' => 'form-control', 'id' => 'sure-name'])->label(false); ?>
                            </div>
                            <div class="form-group">
                                <label class="req" for="comments">your Review</label>
                                <?= $form->field($model, 'your_name')->textarea(['class' => 'form-control', 'id' => 'comments', 'rows' => 5])->label(false); ?>
                                <div class="help-block">
                                    <span class="text-danger">Note:</span> HTML is not translated!
                                </div>
                            </div>
                            <div class="form-group required radio-label">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="control-label req">Rating</label> &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                        <br>
                                        <?= $form->field($model, 'rating')->widget(StarRating::class, [
                                            'options' => [
                                                // Your additional tag options
                                            ],
                                            'clientOptions' => [
                                                // Your client options
                                            ],
                                        ]); ?>
                                        &nbsp;Good
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button type="submit" id="button-review">Continue</button>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                        <!-- Reviews Field Start -->
                    </div>
                </div>
                <!-- Product Thumbnail Tab Content End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Product Thumbnail Description End -->

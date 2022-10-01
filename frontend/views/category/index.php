<?php
/* @var $products \common\models\Product */
/* @var $dataProvider \yii\data\ActiveDataProvider */

$this->title = "Products categories";
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];
?>


<?= $this->render('_breadcrumb'); ?>


<!-- Categories Product Start -->
<div class="all-categories pb-100">
    <div class="container">
        <div class="row">

            <?= $this->render('_content', [
                'products' => $products,
                'dataProvider' => $dataProvider,
            ]); ?>

            <?= $this->render('_left'); ?>

        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Categories Product End -->
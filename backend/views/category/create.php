<?php

use common\models\Category;
use common\models\Product;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Category $model */

$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <?= /** @var TYPE_NAME $modelCustomer */
    $this->render('_form', [
        'modelCustomer' => $modelCustomer,
        'modelsAddress' => (empty($modelsAddress)) ? [new Product()] : $modelsAddress
    ]);
    ?>

</div>

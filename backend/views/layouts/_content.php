<?php

use yii\bootstrap4\Breadcrumbs;

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <h2 class=" btn btn-light btn-md" style=" display:block;font-weight: bolder; font-family: san-serif">
            <?=
            Breadcrumbs::widget(
                [
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]
            ) ?>
        </h2>
        <div class="container-fluid">
            <?= /** @var TYPE_NAME $content */
            $content; ?>
        </div>
    </div>
</div>


<?php


use yii\bootstrap4\Breadcrumbs; ?>


<!-- Page Breadcrumb Start -->
<div class="main-breadcrumb mb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcrumb-content text-center ptb-70">
                    <h1>FURNITURE</h1>
                    <ul class="breadcrumb-list breadcrumb text-center">
                        <?=Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]);?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Breadcrumb End -->

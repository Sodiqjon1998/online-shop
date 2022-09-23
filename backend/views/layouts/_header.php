<?php


use yii\helpers\Html;
use yii\helpers\Url;?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?=Url::home();?>" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <li>
            <a>
                <form action="<?=Url::to(['site/logout'])?>" method="post">
                    <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->csrfToken?>">
                    <button type="submit" class="btn btn-default">Logout</button>
                </form>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  data-slide="true" href="<?=Url::to(['/profilemanager'])?>">
                <i class="fas fa-user-md"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

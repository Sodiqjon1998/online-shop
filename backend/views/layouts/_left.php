<?php


use yii\helpers\Url;

$menuItems = [
    ['label' => "Bosh sahifa", 'url' => ['/site/index'], 'icon' => 'home',],
    ['label' => "Headers", 'url' => ['/header'], 'icon' => 'diagnoses,fas',],
    ['label' => "Menu", 'url' => ['/menumanager'], 'icon' => 'tree,fas',],
    ['label' => "Sahifalar", 'url' => ['/pages'], 'icon' => 'file,fas',],
    ['label' => "Havolalar", 'url' => ['/links'], 'icon' => 'wind,fas',],
    [
        'label' => "Yangiliklar bo'limi",
        'icon' => 'cogs',
        'items' => [
            ['label' => 'Yangiliklar kategoriyasi', 'url' => ['/news-category'], 'icon' => 'list,fas'],
            ['label' => 'Yangiliklar', 'url' => ['/news'], 'icon' => 'list,fas'],
        ]
    ],
    [
        'label' => "Rahbariyat bo'limi",
        'icon' => 'cogs',
        'items' => [
            ['label' => 'Rahbariyat kategoriyasi', 'url' => ['/leader-category'], 'icon' => 'user-md,fas'],
            ['label' => 'Rahbariyat', 'url' => ['/leader'], 'icon' => 'users,fas'],
        ]
    ],
    ['label' => "Obunalar", 'url' => ['/sign'], 'icon' => 'sign,fas'],
    ['label' => "Reklama", 'url' => ['/advice'], 'icon' => 'sign,fas'],
    ['label' => "Ikonkalar", 'url' => ['/icon'], 'icon' => 'lock,fas'],
    ['label' => "Bazi o'zgarishlar", 'url' => ['/translate-manager'], 'icon' => 'globe,fas'],
];

?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::home(); ?>" class="brand-link">
        <img src="<?= Url::base(); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            Yangiariq TTB
            </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Url::base(); ?>/dist/img/sl-b1.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= Url::home() ?>" class="d-block">Yangiariq TTB</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \backend\widgets\AdminLte3Menu::widget([
                'items' => $menuItems,
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

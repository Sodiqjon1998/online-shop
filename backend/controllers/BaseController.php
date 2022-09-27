<?php

namespace backend\controllers;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class BaseController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'create', 'view', 'delete', 'update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}
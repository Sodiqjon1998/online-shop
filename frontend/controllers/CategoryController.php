<?php

namespace frontend\controllers;

use common\models\Product;
use common\models\ProductCommit;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{


    public function actionIndex()
    {

        $data = \Yii::$app->request->get('qiy');
        $query = Product::find()->where(['status' => Product::STATUS_ACTIVE]);

        if (\Yii::$app->request->isAjax) {
            $layout = false;
            if ($data == 'title_asc') {
                $dataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 9,
                    ],
                    'sort' => ['defaultOrder' => ['title' => SORT_ASC]]
                ]);
                $models = [];
                $models ['content'] = $dataProvider->models;
                $datas = [];
                $dataNew = [];

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['price'] = $model['price'];
                    $datas ['content'] = $model['content'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            } elseif ($data == 'title_desc') {
                $dataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 9,
                    ],
                    'sort' => ['defaultOrder' => ['title' => SORT_DESC]]
                ]);
                $models = [];
                $models ['content'] = $dataProvider->models;
                $datas = [];
                $dataNew = [];

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['price'] = $model['price'];
                    $datas ['content'] = $model['content'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            } elseif ($data == 'price-asc') {
                $dataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 9,
                    ],
                    'sort' => ['defaultOrder' => ['price' => SORT_ASC]]
                ]);
                $models = [];
                $models ['content'] = $dataProvider->models;
                $datas = [];
                $dataNew = [];

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            } elseif ($data == 'price_desc') {
                $dataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 9,
                    ],
                    'sort' => ['defaultOrder' => ['price' => SORT_DESC]]
                ]);
                $models = [];
                $models ['content'] = $dataProvider->models;
                $datas = [];
                $dataNew = [];

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            } else {
                $dataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 9,
                    ],
                ]);
                $models = [];
                $models ['content'] = $dataProvider->models;
                $datas = [];
                $dataNew = [];

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            }

        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 9,
            ],
        ]);

        $products = $dataProvider->models;

        if ($products) {
            return $this->render('index', [
                'products' => $products,
                'dataProvider' => $dataProvider,
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }


    public function actionLimit()
    {

        $query = Product::find()->where(['status' => Product::STATUS_ACTIVE]);
        $data = \Yii::$app->request->get('qiy');

        if (\Yii::$app->request->isAjax) {
            $layout = false;
            if ($data == '9') {
                $datan = $data * 1;
                $query = Product::find()->where(['status' => Product::STATUS_ACTIVE])->limit($datan)->all();
                $models = [];
                $datas = [];
                $dataNew = [];
                $models ['content'] = $query;

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            }
            elseif ($data == '2') {
                $datan = $data * 1;
                $query = Product::find()->where(['status' => Product::STATUS_ACTIVE])->limit($datan)->all();
                $models = [];
                $datas = [];
                $dataNew = [];
                $models ['content'] = $query;

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            }
            elseif ($data == '50') {
                $datan = $data * 1;
                $query = Product::find()->where(['status' => Product::STATUS_ACTIVE])->limit($datan)->all();
                $models = [];
                $datas = [];
                $dataNew = [];
                $models ['content'] = $query;

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            }
            elseif ($data == '75') {
                $datan = $data * 1;
                $query = Product::find()->where(['status' => Product::STATUS_ACTIVE])->limit($datan)->all();
                $models = [];
                $datas = [];
                $dataNew = [];
                $models ['content'] = $query;

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            }
            elseif ($data == '100') {
                $datan = $data * 1;
                $query = Product::find()->where(['status' => Product::STATUS_ACTIVE])->limit($datan)->all();
                $models = [];
                $datas = [];
                $dataNew = [];
                $models ['content'] = $query;

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            }

            else {
                $dataProvider = new ActiveDataProvider([
                    'query' => $query,
                    'pagination' => [
                        'pageSize' => 9,
                    ],
                ]);
                $models = [];
                $models ['content'] = $dataProvider->models;
                $datas = [];
                $dataNew = [];

                foreach ($models['content'] as $model) {
                    $datas ['id'] = $model['id'];
                    $datas ['title'] = $model['title'];
                    $datas ['content'] = $model['content'];
                    $datas ['price'] = $model['price'];
                    $datas ['img'] = $model->image();

                    array_push($dataNew, $datas);
                }
                $models ['data'] = $dataNew;
                return $this->asJson($models);
            }

        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $products = $dataProvider->models;

        if ($products) {
            return $this->render('index', [
                'products' => $products,
                'dataProvider' => $dataProvider,
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }


    public function actionCategories($id)
    {
        $query = Product::find()->where(['status' => Product::STATUS_ACTIVE, 'category_id' => $id])->orWhere(['color_id' => $id])->orWhere(['manufacture_id' => $id]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 9,
            ]
        ]);

        $products = $dataProvider->models;

        if ($products) {
            return $this->render('index', [
                'products' => $products,
                'dataProvider' => $dataProvider,
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }


    public function actionProductDetail($id)
    {

        if (Product::findOne($id)) {

            $productOne = Product::findOne(['id' => $id, 'status' => Product::STATUS_ACTIVE]);
            $productOne->updateCounters(['view_count' => 1]);
            $model = new ProductCommit();

            if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
                $productOne->updateCounters(['review_count' => 1]);

                $model->status = 0;

                if ($model->save()) {
                    return $this->redirect(\Yii::$app->request->referrer);
                }
            }

            return $this->render('product-detail', [
                'productOne' => $productOne,
                'model' => $model,
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }
}
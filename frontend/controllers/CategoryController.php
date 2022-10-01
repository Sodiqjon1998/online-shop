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

        $query = Product::find()->where(['status' => Product::STATUS_ACTIVE]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 9,
            ]
        ]);

        $products = $dataProvider->models;

        if($products){
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

        if($products){
            return $this->render('index', [
                'products' => $products,
                'dataProvider' => $dataProvider,
            ]);
        }

        return $this->render('@frontend/views/site/404');
    }


    public function actionProductDetail($id){

        if(Product::findOne($id)){

            $productOne = Product::findOne(['id' => $id, 'status' => Product::STATUS_ACTIVE]);

            $model = new ProductCommit();

            if($model->load(\Yii::$app->request->post()) && $model->validate()){
                $model->status = 0;

                if($model->save()){
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
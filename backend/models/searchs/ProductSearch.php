<?php

namespace backend\models\searchs;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product;

/**
 * ProductSearch represents the model behind the search form of `common\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'color_id', 'manufacture_id', 'price', 'reward_points', 'discount', 'review_count', 'view_count', 'status'], 'integer'],
            [['title', 'content', 'product_code', 'availability'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'color_id' => $this->color_id,
            'manufacture_id' => $this->manufacture_id,
            'price' => $this->price,
            'reward_points' => $this->reward_points,
            'discount' => $this->discount,
            'review_count' => $this->review_count,
            'view_count' => $this->view_count,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'product_code', $this->product_code])
            ->andFilterWhere(['like', 'availability', $this->availability]);

        return $dataProvider;
    }
}

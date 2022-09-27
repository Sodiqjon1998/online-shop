<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $color_id
 * @property int|null $manufacture_id
 * @property string|null $title
 * @property int|null $price
 * @property string|null $content
 * @property string|null $product_code
 * @property int|null $reward_points
 * @property string|null $availability
 * @property int|null $discount
 * @property int|null $review_count
 * @property int|null $view_count
 * @property int|null $status
 *
 * @property Category $category
 * @property ColorCategory $color
 * @property ManufactureCategory $manufacture
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'color_id', 'manufacture_id', 'price', 'reward_points', 'discount', 'review_count', 'view_count', 'status'], 'integer'],
            [['content'], 'string'],
            [['title', 'product_code', 'availability'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => ColorCategory::class, 'targetAttribute' => ['color_id' => 'id']],
            [['manufacture_id'], 'exist', 'skipOnError' => true, 'targetClass' => ManufactureCategory::class, 'targetAttribute' => ['manufacture_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'color_id' => 'Color ID',
            'manufacture_id' => 'Manufacture ID',
            'title' => 'Title',
            'price' => 'Price',
            'content' => 'Content',
            'product_code' => 'Product Code',
            'reward_points' => 'Reward Points',
            'availability' => 'Availability',
            'discount' => 'Discount',
            'review_count' => 'Review Count',
            'view_count' => 'View Count',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Color]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(ColorCategory::class, ['id' => 'color_id']);
    }

    /**
     * Gets query for [[Manufacture]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getManufacture()
    {
        return $this->hasOne(ManufactureCategory::class, ['id' => 'manufacture_id']);
    }


    public static function createMultiple($modelClass, $multipleModels = [])
    {
        $model    = new $modelClass;
        $formName = $model->formName();
        $post     = Yii::$app->request->post($formName);
        $models   = [];

        if (! empty($multipleModels)) {
            $keys = array_keys(ArrayHelper::map($multipleModels, 'id', 'id'));
            $multipleModels = array_combine($keys, $multipleModels);
        }

        if ($post && is_array($post)) {
            foreach ($post as $i => $item) {
                if (isset($item['id']) && !empty($item['id']) && isset($multipleModels[$item['id']])) {
                    $models[] = $multipleModels[$item['id']];
                } else {
                    $models[] = new $modelClass;
                }
            }
        }

        unset($model, $formName, $post);

        return $models;
    }
}

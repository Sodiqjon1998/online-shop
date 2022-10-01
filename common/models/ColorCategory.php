<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use Yii;

/**
 * This is the model class for table "color_category".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 *
 * @property User $createdBy
 * @property Product[] $products
 * @property User $updatedBy
 */
class ColorCategory extends DefaultActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'color_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }


    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::class, ['color_id' => 'id']);
    }


    /**
     * @return bool|int|string|null
     */
    public function getProductCount()
    {
        return $this->hasMany(Product::class, ['color_id' => 'id'])->count();
    }
}

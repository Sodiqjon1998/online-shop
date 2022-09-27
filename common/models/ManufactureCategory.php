<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use Yii;

/**
 * This is the model class for table "manufacture_category".
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
class ManufactureCategory extends DefaultActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'manufacture_category';
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
        return $this->hasMany(Product::class, ['manufacture_id' => 'id']);
    }

}

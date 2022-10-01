<?php

namespace common\models;

use common\models\defaults\DefaultActiveRecord;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product_commit".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $your_name
 * @property string|null $rating
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class ProductCommit extends DefaultActiveRecord
{

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        unset($behaviors[1]);
        return $behaviors;

    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_commit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'your_name'], 'required'],
            [['your_name'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'rating'], 'string', 'max' => 255],
        ];
    }

}

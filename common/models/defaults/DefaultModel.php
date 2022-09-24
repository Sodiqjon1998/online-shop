<?php

namespace common\models\defaults;

use yii\base\Model;

class DefaultModel extends Model
{
    public function attributeLabels(): array
    {
        return DefaultActiveRecord::getAttributeLabels();
    }
}
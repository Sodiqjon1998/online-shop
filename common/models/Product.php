<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use zxbodya\yii2\galleryManager\GalleryBehavior;

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
    public const STATUS_DELETED = 3;
    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 1;

    public function behaviors()
    {
        return [
            'galleryBehavior' => [
                'class' => GalleryBehavior::class,
                'type' => 'product',
                'extension' => 'jpg, png, jpeg',
                'directory' => Yii::getAlias('@webroot') . '/uploads/product/gallery',
                'url' => Yii::getAlias('@web') . '/uploads/product/gallery',
                'versions' => [
                    'small' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        return $img
                            ->copy()
                            ->thumbnail(new \Imagine\Image\Box(200, 200));
                    },
                    'medium' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                            ->copy()
                            ->resize($dstSize);
                    },
                ]
            ]
        ];
    }


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
            'category_id' => 'Kategoriyasi',
            'color_id' => 'Rang kategoriyasi',
            'manufacture_id' => 'Ishlab chiqarish korxonasi',
            'title' => 'Sarlavha',
            'price' => 'Narxi',
            'content' => 'Matni',
            'product_code' => 'Maxsulot kodi',
            'reward_points' => 'Mukofot ballari',
            'availability' => 'Yaroqligligi',
            'discount' => 'Chegirma',
            'review_count' => 'Izohlar soni',
            'view_count' => 'Ko\'rishlar soni',
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


    public function images($type = 'medium')
    {

        $images = [];

        foreach ($this->getBehavior('galleryBehavior')->getImages() as $key=>$image) {

            $images[$key] = $image->getUrl($type);
        }
        return $images;

    }

    public function image($type = 'medium')
    {
        $images = $this->images($type);

        if (empty($images)) {

            return '';
        }

        return $images[0];
    }


    public static function getList(bool $active = true, string $select = 'name'): array
    {
        $query = ColorCategory::find();
        return ArrayHelper::map($query->all(), 'id', $select);
    }



    public static function getStatusList(): array
    {
        return [
            static::STATUS_DELETED => "O'chirilgan",
            static::STATUS_INACTIVE => 'Nofaol',
            static::STATUS_ACTIVE => 'Faol',
        ];
    }

    public function getStatusName(): string
    {
        $list = static::getStatusList();
        return $this->hasAttribute('status') ? $list[$this->status] ?? '-' : '-';
    }
}

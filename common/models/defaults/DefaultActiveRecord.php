<?php

namespace common\models\defaults;

use common\models\User;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class DefaultActiveRecord extends ActiveRecord
{
    public const STATUS_DELETED = 3;
    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 1;

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class,
        ];
    }

    public function attributeLabels(): array
    {
        return self::getAttributeLabels();
    }

    public static function getAttributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'name_uz' => 'Nomi uz',
            'name_ru' => 'Nomi ru',
            'first_name' => 'Ism',
            'last_name' => 'Familya',
            'father_name' => 'Sharifi',
            'info' => "Qo'shimcha ma'lumot",
            'status' => 'Statusi',
            'created_at' => 'Yaratilgan vaqti',
            'updated_at' => "Yangilangan vaqti",
            'created_by' => 'Yaratdi',
            'updated_by' => 'Yangiladi',

            'course_id' => 'Kursi',
            'teacher_id' => "O'qituvchisi",
            'cost' => 'Narxi',
            'lesson' => 'Darslar soni',
            'content' => 'Matin',
            'img' => 'Rasm',

            'phone' => "Telefon raqami",
            'gender' => "Jinsi",
            'born_date' => "Tug'ilgan sanasi",
            'username' => "Username",
            'password' => "Paroli",

            'url' => 'Url manzili',
            'languages' => 'Tillari',
            'nurse_id' => "Hamshira",
            'born' => "Tug'ilgan sanasi",
            'series' => "Seriyasi",
            'number' => "Passport Raqami",
            'photo_url' => "Rasmi",
            'branches' => "Filiallar",
            'branch_id' => "Filiali",
            'freelancer' => 'Yollanma ishchi',
            'speciality_id' => 'Mutaxasisligi',
            'data_status' => 'Ma\'lumotlar xolati',
            'serial' => 'Passport seriasi',

            'address' => 'Manzili',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'address_category_id' => 'Manzil guruhi',

            'header_uz' => 'Sarlavha uz',
            'header_ru' => 'Sarlavha ru',
            'title_uz' => 'Sarlavha nomi uz',
            'title_ru' => 'Sarlavha nomi ru',
            'description_uz' => 'Tavsifi uz',
            'description_ru' => 'Tavsifi ru',
            'order' => 'Buyurtma',
            'contact_id' => 'Mijoz',
            'address_id' => 'Manzili',
            'type' => "Turi",
            "value" => "Qiymati",

            'user_id' => 'Foydalanuvchi'
        ];
    }


    public function delete($force = false)
    {
        if ($force) {
            return parent::delete();
        }
        if ($this->hasAttribute('status')) {
            $this->status = static::STATUS_DELETED;
            return $this->save(false);
        }
        return false;
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

    public function isActive(): bool
    {
        if ($this->hasAttribute('status')) {
            return $this->status === static::STATUS_ACTIVE;
        }
        return false;
    }

    public static function getList(bool $active = true, string $select = 'name'): array
    {
        $query = static::find();
        if ($active) {
            $query->andWhere(['status' => static::STATUS_ACTIVE]);
        }
        return ArrayHelper::map($query->all(), 'id', $select);
    }



    public function getCreatedBy(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * @return ActiveQuery
     */
    public function getUpdatedBy(): ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }
}
<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transport".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $id_photo
 * @property int $id_specifications
 * @property int $id_type
 * @property float $price
 * @property int $quantity
 *
 * @property Orders[] $orders
 * @property Photo $photo
 * @property Photo[] $photos
 * @property Specifications $specifications
 * @property Type $type
 */
class Transport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'id_photo', 'id_specifications', 'id_type', 'price', 'quantity'], 'required'],
            [['description'], 'string'],
            [['id_photo', 'id_specifications', 'id_type', 'quantity'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['id_photo'], 'exist', 'skipOnError' => true, 'targetClass' => Photo::class, 'targetAttribute' => ['id_photo' => 'id']],
            [['id_specifications'], 'exist', 'skipOnError' => true, 'targetClass' => Specifications::class, 'targetAttribute' => ['id_specifications' => 'id']],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => Type::class, 'targetAttribute' => ['id_type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'id_photo' => 'Id Photo',
            'id_specifications' => 'Id Specifications',
            'id_type' => 'Id Type',
            'price' => 'Price',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::class, ['id_transport' => 'id']);
    }

    /**
     * Gets query for [[Photo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPhoto()
    {
        return $this->hasOne(Photo::class, ['id' => 'id_photo']);
    }

    /**
     * Gets query for [[Photos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::class, ['id_transport' => 'id']);
    }

    /**
     * Gets query for [[Specifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecifications()
    {
        return $this->hasOne(Specifications::class, ['id' => 'id_specifications']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::class, ['id' => 'id_type']);
    }
}

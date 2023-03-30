<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $id_user
 * @property int $id_transport
 * @property float $over_price
 *
 * @property Transport $transport
 * @property User $user
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'id_user', 'id_transport', 'over_price'], 'required'],
            [['description'], 'string'],
            [['id_user', 'id_transport'], 'integer'],
            [['over_price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['id_transport'], 'exist', 'skipOnError' => true, 'targetClass' => Transport::class, 'targetAttribute' => ['id_transport' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
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
            'id_user' => 'Id User',
            'id_transport' => 'Id Transport',
            'over_price' => 'Over Price',
        ];
    }

    /**
     * Gets query for [[Transport]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransport()
    {
        return $this->hasOne(Transport::class, ['id' => 'id_transport']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property int $id_transport
 * @property string $photo
 *
 * @property Transport $transport
 * @property Transport[] $transports
 */
class Photo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transport', 'photo'], 'required'],
            [['id_transport'], 'integer'],
            [['photo'], 'string', 'max' => 255],
            [['id_transport'], 'exist', 'skipOnError' => true, 'targetClass' => Transport::class, 'targetAttribute' => ['id_transport' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_transport' => 'Id Transport',
            'photo' => 'Photo',
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
     * Gets query for [[Transports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransports()
    {
        return $this->hasMany(Transport::class, ['id_photo' => 'id']);
    }
}

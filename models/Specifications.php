<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "specifications".
 *
 * @property int $id
 * @property int $id_engine
 * @property int $id_chassis
 * @property int $id_transmission
 * @property int $id_opetation_characteristics
 * @property int $id_dimensions_weight
 *
 * @property Chassis $chassis
 * @property DimensionsWeight $dimensionsWeight
 * @property Engine $engine
 * @property OpetationCharacteristics $opetationCharacteristics
 * @property Transmission $transmission
 * @property Transport[] $transports
 */
class Specifications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'specifications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_engine', 'id_chassis', 'id_transmission', 'id_opetation_characteristics', 'id_dimensions_weight'], 'required'],
            [['id_engine', 'id_chassis', 'id_transmission', 'id_opetation_characteristics', 'id_dimensions_weight'], 'integer'],
            [['id_chassis'], 'exist', 'skipOnError' => true, 'targetClass' => Chassis::class, 'targetAttribute' => ['id_chassis' => 'id']],
            [['id_dimensions_weight'], 'exist', 'skipOnError' => true, 'targetClass' => DimensionsWeight::class, 'targetAttribute' => ['id_dimensions_weight' => 'id']],
            [['id_engine'], 'exist', 'skipOnError' => true, 'targetClass' => Engine::class, 'targetAttribute' => ['id_engine' => 'id']],
            [['id_opetation_characteristics'], 'exist', 'skipOnError' => true, 'targetClass' => OpetationCharacteristics::class, 'targetAttribute' => ['id_opetation_characteristics' => 'id']],
            [['id_transmission'], 'exist', 'skipOnError' => true, 'targetClass' => Transmission::class, 'targetAttribute' => ['id_transmission' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_engine' => 'Id Engine',
            'id_chassis' => 'Id Chassis',
            'id_transmission' => 'Id Transmission',
            'id_opetation_characteristics' => 'Id Opetation Characteristics',
            'id_dimensions_weight' => 'Id Dimensions Weight',
        ];
    }

    /**
     * Gets query for [[Chassis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChassis()
    {
        return $this->hasOne(Chassis::class, ['id' => 'id_chassis']);
    }

    /**
     * Gets query for [[DimensionsWeight]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDimensionsWeight()
    {
        return $this->hasOne(DimensionsWeight::class, ['id' => 'id_dimensions_weight']);
    }

    /**
     * Gets query for [[Engine]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEngine()
    {
        return $this->hasOne(Engine::class, ['id' => 'id_engine']);
    }

    /**
     * Gets query for [[OpetationCharacteristics]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOpetationCharacteristics()
    {
        return $this->hasOne(OpetationCharacteristics::class, ['id' => 'id_opetation_characteristics']);
    }

    /**
     * Gets query for [[Transmission]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransmission()
    {
        return $this->hasOne(Transmission::class, ['id' => 'id_transmission']);
    }

    /**
     * Gets query for [[Transports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransports()
    {
        return $this->hasMany(Transport::class, ['id_specifications' => 'id']);
    }
}

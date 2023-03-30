<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opetation_characteristics".
 *
 * @property int $id
 * @property int|null $max_speed максимальная скорость
 * @property int|null $ramp_time Время разгона до 100 км ч
 * @property int $tank_capacity емкость топливного бака
 * @property string $fuel_consumption расход топлива
 *
 * @property Specifications[] $specifications
 */
class OpetationCharacteristics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'opetation_characteristics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['max_speed', 'ramp_time', 'tank_capacity'], 'integer'],
            [['tank_capacity', 'fuel_consumption'], 'required'],
            [['fuel_consumption'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'max_speed' => 'Max Speed',
            'ramp_time' => 'Ramp Time',
            'tank_capacity' => 'Tank Capacity',
            'fuel_consumption' => 'Fuel Consumption',
        ];
    }

    /**
     * Gets query for [[Specifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecifications()
    {
        return $this->hasMany(Specifications::class, ['id_opetation_characteristics' => 'id']);
    }
}

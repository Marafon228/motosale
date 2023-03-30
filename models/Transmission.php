<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transmission".
 *
 * @property int $id
 * @property string|null $transmission_gears коробка передач
 * @property int $number_gears количество передач
 * @property string|null $clutch сцепление
 * @property string|null $main_gear главная передача
 *
 * @property Specifications[] $specifications
 */
class Transmission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transmission';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_gears'], 'required'],
            [['number_gears'], 'integer'],
            [['transmission_gears', 'clutch', 'main_gear'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transmission_gears' => 'Transmission Gears',
            'number_gears' => 'Number Gears',
            'clutch' => 'Clutch',
            'main_gear' => 'Main Gear',
        ];
    }

    /**
     * Gets query for [[Specifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecifications()
    {
        return $this->hasMany(Specifications::class, ['id_transmission' => 'id']);
    }
}

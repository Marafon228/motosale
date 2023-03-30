<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dimensions_weight".
 *
 * @property int $id
 * @property int $length длина
 * @property int $width широта
 * @property int|null $saddle_height высота по седлу
 * @property int|null $wheelbase колесная база
 * @property int|null $dry_mass сухая масса
 * @property int|null $curd_weight снаряженная масса
 * @property int $gross_weight полная масса
 * @property string $frame рама
 *
 * @property Specifications[] $specifications
 */
class DimensionsWeight extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dimensions_weight';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['length', 'width', 'gross_weight', 'frame'], 'required'],
            [['length', 'width', 'saddle_height', 'wheelbase', 'dry_mass', 'curd_weight', 'gross_weight'], 'integer'],
            [['frame'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'length' => 'Length',
            'width' => 'Width',
            'saddle_height' => 'Saddle Height',
            'wheelbase' => 'Wheelbase',
            'dry_mass' => 'Dry Mass',
            'curd_weight' => 'Curd Weight',
            'gross_weight' => 'Gross Weight',
            'frame' => 'Frame',
        ];
    }

    /**
     * Gets query for [[Specifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecifications()
    {
        return $this->hasMany(Specifications::class, ['id_dimensions_weight' => 'id']);
    }
}

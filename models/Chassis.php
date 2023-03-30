<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chassis".
 *
 * @property int $id
 * @property string $front_suspension передняя подвеска
 * @property int $front_suspension_stroke ход передней подвески
 * @property string $rear_suspension задняя подвеска
 * @property int $rear_suspension_stroke ход задней подвески
 * @property string $front_brakes передние тормоза
 * @property int $diameter1 диаметр 1
 * @property string $rear_brakes задние тормоза
 * @property int $diameter2 диаметр 2
 * @property string|null $abs ABS
 * @property string $front_tire передняя шина
 * @property string $rear_tire задняя шина
 * @property string $front_disc передний диск
 * @property string $rear_disc задний диск
 *
 * @property Specifications[] $specifications
 */
class Chassis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chassis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['front_suspension', 'front_suspension_stroke', 'rear_suspension', 'rear_suspension_stroke', 'front_brakes', 'diameter1', 'rear_brakes', 'diameter2', 'front_tire', 'rear_tire', 'front_disc', 'rear_disc'], 'required'],
            [['front_suspension_stroke', 'rear_suspension_stroke', 'diameter1', 'diameter2'], 'integer'],
            [['front_suspension', 'rear_suspension', 'front_brakes', 'rear_brakes', 'abs', 'front_tire', 'rear_tire', 'front_disc', 'rear_disc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'front_suspension' => 'Front Suspension',
            'front_suspension_stroke' => 'Front Suspension Stroke',
            'rear_suspension' => 'Rear Suspension',
            'rear_suspension_stroke' => 'Rear Suspension Stroke',
            'front_brakes' => 'Front Brakes',
            'diameter1' => 'Diameter1',
            'rear_brakes' => 'Rear Brakes',
            'diameter2' => 'Diameter2',
            'abs' => 'Abs',
            'front_tire' => 'Front Tire',
            'rear_tire' => 'Rear Tire',
            'front_disc' => 'Front Disc',
            'rear_disc' => 'Rear Disc',
        ];
    }

    /**
     * Gets query for [[Specifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecifications()
    {
        return $this->hasMany(Specifications::class, ['id_chassis' => 'id']);
    }
}

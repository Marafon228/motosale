<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "engine".
 *
 * @property int $id
 * @property int $number_clock_cycles Количество тактов
 * @property int $number_cylinders Кол-во цилиндров
 * @property int $number_valves_per_cylinder Кол-во клапанов на цилиндр
 * @property string $configuration Конфигурация
 * @property string $working_volume Рабочий объем
 * @property string $cylinder_diameter_piston_stroke Диаметр цилиндра и ход поршня
 * @property string $max_power Макс. мощность
 * @property string $torque Крутящий момент
 * @property string|null $compression_ratio Степень сжатия
 * @property string $intake Впуск
 * @property string $cooling_system Система охлаждения
 * @property string $launch_system Система запуска
 *
 * @property Specifications[] $specifications
 */
class Engine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'engine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_clock_cycles', 'number_cylinders', 'number_valves_per_cylinder', 'configuration', 'working_volume', 'cylinder_diameter_piston_stroke', 'max_power', 'torque', 'intake', 'cooling_system', 'launch_system'], 'required'],
            [['number_clock_cycles', 'number_cylinders', 'number_valves_per_cylinder'], 'integer'],
            [['configuration', 'working_volume', 'cylinder_diameter_piston_stroke', 'max_power', 'torque', 'compression_ratio', 'intake', 'cooling_system', 'launch_system'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number_clock_cycles' => 'Number Clock Cycles',
            'number_cylinders' => 'Number Cylinders',
            'number_valves_per_cylinder' => 'Number Valves Per Cylinder',
            'configuration' => 'Configuration',
            'working_volume' => 'Working Volume',
            'cylinder_diameter_piston_stroke' => 'Cylinder Diameter Piston Stroke',
            'max_power' => 'Max Power',
            'torque' => 'Torque',
            'compression_ratio' => 'Compression Ratio',
            'intake' => 'Intake',
            'cooling_system' => 'Cooling System',
            'launch_system' => 'Launch System',
        ];
    }

    /**
     * Gets query for [[Specifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpecifications()
    {
        return $this->hasMany(Specifications::class, ['id_engine' => 'id']);
    }
}

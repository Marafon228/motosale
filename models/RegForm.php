<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 */
class RegForm extends User
{



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password'], 'required', 'message' => 'Поле обязательно для заполнения'],
            ['login', 'match', 'pattern' => '/^[A-Za-z\s\-]{1,}$/u', 'message' => 'Только латинские буквы'],
            ['login', 'unique', 'message' => 'Этот логин занят'],
            [[ 'login','password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Пароль',
        ];
    }



}
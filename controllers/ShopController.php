<?php

namespace app\controllers;

use yii\web\Controller;

class ShopController extends Controller
{
    public function actionShop()
    {
        return $this->render('shop');
    }
}

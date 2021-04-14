<?php
namespace app\controllers;

use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;

class CustomerController extends ActiveController
{
    public $modelClass = 'app\models\Customer';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['class'] = QueryParamAuth::className();
        $behaviors['authenticator']['tokenParam'] = 'token';
        return $behaviors;
    }
}
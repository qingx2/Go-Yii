<?php
/**
 * Author: Zachary
 * Date: 2017/10/29 12:15
 */

namespace appmobile\controllers;


use common\baseclass\BaseAPIController;
use yii\filters\auth\HttpBearerAuth;
use Yii;

class ItemController extends BaseAPIController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        if (Yii::$app->getRequest()->getMethod() !== 'OPTIONS') {
            $behaviors['authenticator'] = [
                'class' => HttpBearerAuth::className(),
            ];
        }
        return $behaviors;
    }

    public function actionIndex()
    {
        return ['success' => 1, 'msg' => 'hello'];
    }

}

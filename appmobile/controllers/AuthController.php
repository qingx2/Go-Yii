<?php
/**
 * Author: Zachary
 * Date: 2017/10/29 11:01
 */

namespace appmobile\controllers;


use common\baseclass\BaseAPIController;

class AuthController extends BaseAPIController
{
    public function actionIndex()
    {
        $username = \Yii::$app->request->post('name');
        $password = \Yii::$app->request->post('password');
        if ($username == "admin" && $password == "admin") {
            return ['success' => 1, 'msg' => '100-token'];
        }
        return ['success' => 0, 'msg' => '失败'];
    }
}
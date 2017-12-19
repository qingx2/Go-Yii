<?php
/**
 * Author: Zachary
 * Date: 2017/10/29 11:01
 */

namespace appmobile\controllers;


use common\baseclass\BaseAPIController;
use Yii;

class AuthController extends BaseAPIController
{
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $username = $request->post('name', '');
        $password = $request->post('password', '');
        if ($username == "admin" && $password == "admin") {
            return ['success' => 1, 'msg' => '100-token'];
        }
        return ['success' => 0, 'msg' => '失败'];
    }
}
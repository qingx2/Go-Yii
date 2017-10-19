<?php
/**
 * User: surprisepeas
 * Date: 2017/10/18 23:16
 */

namespace console\controllers;


use yii\console\Controller;
use Yii;

class ExController extends Controller
{
    public function actionI()
    {
        $testObject = Yii::createObject([
            'class' => 'backend\components\Test',
            'name'  => 'new test name',
        ],[20]);
        dd($testObject);

        $object = Yii::createObject([
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=demo',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ]);
        dd($object);
    }
}
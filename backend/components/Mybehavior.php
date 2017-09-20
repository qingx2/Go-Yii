<?php
/**
 * User: surprisepeas
 * Date: 2017/9/20 23:50
 */

namespace backend\components;


use yii\base\ActionFilter;
use Yii;

class Mybehavior extends ActionFilter
{
    public function beforeAction($action)
    {
        dump('hi');
        return true;
    }

    public function isGuest ()
    {
        return Yii::$app->user->isGuest;
    }
}
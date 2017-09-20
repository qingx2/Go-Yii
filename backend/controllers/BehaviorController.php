<?php
/**
 * User: surprisepeas
 * Date: 2017/9/20 23:49
 */

namespace backend\controllers;


use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * [ 行为的理解 ]
 * 实质就是一个类（yii\base\Behavior 或其子类的实例），
 * 通过某些特殊方式（注入，绑定），
 * 同另一个类（yii\base\Component 或其子类的实例）进行了绑定，
 * 然后二者可以进行交互。
 *
 * Class BehaviorController
 * @package backend\controllers
 */
class BehaviorController extends Controller
{
    public function behaviors()
    {
        return [
            //附加行为
            'myBehavior' => \backend\components\MyBehavior::className(),
            'verbs'      => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        dump($this->isGuest());
    }
}
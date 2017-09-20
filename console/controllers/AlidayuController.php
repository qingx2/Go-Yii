<?php
/**
 * User: surprisepeas
 * Date: 2017/9/20 15:25
 */

namespace console\controllers;


use common\third\AlidayuService;
use yii\console\Controller;

class AlidayuController extends Controller
{
    public static function actionSend()
    {
        $parmas = [
            'name' => 'Wendy',
            'day'  => '271'
        ];

        $service = AlidayuService::sendMsgByPhone('18945051758', $parmas);
        dd($service);
    }
}
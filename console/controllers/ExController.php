<?php
/**
 * User: surprisepeas
 * Date: 2017/10/18 23:16
 */

namespace console\controllers;


use common\jobs\ThingJob;
use linslin\yii2\curl\Curl;
use yii\console\Controller;
use Yii;

class ExController extends Controller
{
    public function actionI()
    {
        $testObject = Yii::createObject([
            'class' => 'backend\components\Test',
            'name'  => 'new test name',
        ], [20]);
        dd($testObject);

        $object = Yii::createObject([
            'class'    => 'yii\db\Connection',
            'dsn'      => 'mysql:host=127.0.0.1;dbname=demo',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8',
        ]);
        dd($object);
    }

    public function actionO()
    {
//        Yii::$app->queue->push(new ThingJob());
        dd(self::className());
        $path = Yii::getAlias(Yii::$app->basePath);
        dump($path, realpath($path));
        $p = strncmp($path, 'phar://', 7) === 0 ? $path : realpath($path);
        dd($p);
    }

    public function actionG()
    {
        $curl = new Curl();
        $url = "https://api.weixin.qq.com/cgi-bin/message/wxopen/template/send?access_token=acqWFR1UDbQEPATB1UXtob1cC6NqPUEyErT1SdoE-NFyhK1PdhPl95p18wKtCaj9BrgsLfS1NBNVWUlUjJ1RCQSoEa1OfEPGwYGJNN5pb7kGARjAJANHY";
        $dd = [];
        $value = array(
            "keyword1" => array(
                "value" => 'woshiha2222oren',
                "color" => "#4a4a4a",
            ),
            "keyword2" => array(
                "value" => 'woshi3333haoren',
                "color" => "#9b9b9b",
            ),
            "keyword3" => array(
                "value" => 'woshi444haoren',
                "color" => "#9b9b9b",
            ),
            "keyword4" => array(
                "value" => 'wosh55ihaoren',
                "color" => "#9b9b9b",
            ),
        );
        $dd['touser'] = 'ozJQO0W_fyNWFExlGkClof3y3WFY';
        $dd['template_id'] = 'd5jy1XYkeT89jljP_MmX0iK2YxzcemKt1Qn79FSGlFw';
        $dd['page'] = 'index';  //点击模板卡片后的跳转页面，仅限本小程序内的页面。支持带参数,该字段不填则模板无跳转。
        $dd['form_id'] = '1511512096804';
        $dd['data'] = $value;
        $dd['emphasis_keyword'] = '';
        $dd = json_encode($dd);
        dd($dd);
        $query = $curl->setHeader('Content-Type', 'application/json')->setPostParams($dd)->post($url,false);



        dd($query);
        $query->post($url);
    }


}

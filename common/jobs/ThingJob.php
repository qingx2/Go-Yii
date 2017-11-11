<?php
/**
 * Author: Zachary
 * Date: 2017/11/6 14:13
 */

namespace common\jobs;


use linslin\yii2\curl\Curl;
use yii\queue\Job;

class ThingJob implements Job
{
    public function execute($queue)
    {
        $curl = new Curl();
        $result = $curl->get('http://106.14.146.199:9999/things/upload?id=0670FF373736434D43212419&cf=0&uv=0&et=333&ve=20171106&td=90&ph=6.8&tp=27.5&wb=75&bb=60&pu=67&fe=0&he=0&ml=0&mfe=0&fs=a474dda0&fes=5fcdbf49&phs=123abc75');
        dump($result);
    }
}
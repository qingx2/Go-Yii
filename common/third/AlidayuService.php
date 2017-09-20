<?php

namespace common\third;

use Flc\Dysms\Request\SendSms;
use Flc\Dysms\Client;
use Yii;

class AlidayuService
{

    /**
     * 阿里大于短信测试发送
     *
     * @param       $phone
     * @param array $params
     * @return mixed
     */
    public static function sendMsgByPhone($phone, array $params)
    {
        $alidayu_params = Yii::$app->params['alidayu'];
        $config = [
            'accessKeyId'     => array_get($alidayu_params, 'accessKeyId'),
            'accessKeySecret' => array_get($alidayu_params, 'accessKeySecret'),
        ];

        $client = new Client($config);
        $sendSms = new SendSms();
        $sendSms->setPhoneNumbers($phone);
        $sendSms->setSignName(array_get($alidayu_params, 'SignName'));
        $sendSms->setTemplateCode(array_get($alidayu_params, 'TemplateCode'));
        $sendSms->setTemplateParam([
            'name' => array_get($params, 'name'),
        ]);
        $sendSms->setOutId('demo');

        return $client->execute($sendSms);
    }

}

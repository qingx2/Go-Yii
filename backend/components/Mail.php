<?php
/**
 * User: surprisepeas
 * Date: 2017/9/21 22:11
 */

namespace backend\components;

use Yii;

/**
 * Class Mail
 * @package backend\components
 */
class Mail
{

    public static function sendMail($event)
    {
        return Yii::$app->mailer->compose()
            ->setTo($event->email)
            ->setSubject($event->subject)
            ->setTextBody($event->content)
            ->setHtmlBody($event->body)
            ->send();
    }
}
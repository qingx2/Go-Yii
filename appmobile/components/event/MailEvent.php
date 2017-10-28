<?php
/**
 * User: surprisepeas
 * Date: 2017/9/21 22:45
 */

namespace backend\components\event;


use yii\base\Event;

/**
 * Class MailEvent
 * @package backend\components\event
 * @property string $mail
 * @property string $subject
 * @property string $content
 */
class MailEvent extends Event
{
    public $email;
    public $subject;
    public $content;
    public $body;
}
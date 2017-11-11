<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'charset'    => 'utf-8',
    'language'   => 'zh-CN',
    'timeZone'   => 'Asia/Shanghai',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'queue' => [
            'class'  => \yii\queue\redis\Queue::class,
            'as log' => \yii\queue\LogBehavior::class,
        ],
    ],
];

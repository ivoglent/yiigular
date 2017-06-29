<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 6/30/17
 * Time: 12:29 AM
 */
return [
    'id' => 'yiigular-console',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'ivoglent\yiigular\console\controllers',
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => [],
];

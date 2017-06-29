<?php
/**
 * Created by PhpStorm.
 * User: ivoglent
 * Date: 6/30/17
 * Time: 12:26 AM
 */
require (dirname(__DIR__) . '/YiiGular.php');
require(VENDOR_DIR . '/autoload.php');
require(VENDOR_DIR . '/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/config/console.php');

$application = new yii\console\Application($config);
$exitCode = $application->run();
exit($exitCode);
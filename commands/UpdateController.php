<?php

namespace app\commands;


use yii\console\Controller;
use ziya\Proxy\ProxyLoop;

class UpdateController extends Controller
{
    public function actionIndex()
    {
        $bot_api_key = "6754098026:AAFlXf14Ieu-9x3WoNEfd31O4TizGSXNvLA";
        $url = "http://localhost:8080/bot/bot";
        $proxy = new ProxyLoop($bot_api_key, $url);
        $proxy->loop(1, true, true);
    }
}
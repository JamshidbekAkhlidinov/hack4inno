<?php

namespace app\modules\bot\controllers;

use yii\web\Controller;
use yii\web\Response;

/**
 * Default controller for the `bot` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionData()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $file = file_get_contents('data/data.csv');
        $array = explode("\n", $file);
        echo "<pre>";
        print_r($array);
        $items = [];
        foreach ($array as $item) {
            if (!empty($item)) {
                $items[] = explode(',', $item);
            }
        }
        $value = ($items[count($items) - 1]);
        file_put_contents('data/value.txt', implode(',', $value));
    }

}

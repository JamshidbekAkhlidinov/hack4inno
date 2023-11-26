<?php
/*
 *   Jamshidbek Akhlidinov
 *   19 - 8 2023 12:32:9
 *   https://github.com/JamshidbekAkhlidinov
 */

namespace frontend\modules\bot\error;

use app\modules\bot\base\ErrorPageFrame;
use Yii;

class BotProfileNotFound extends ErrorPageFrame
{
    public function getMessage(): array
    {
        return [
            'success' => false,
            'message' => Yii::t('app', "Service not found"),
        ];
    }
}
<?php

namespace app\modules\spamdetector;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\spamdetector\controllers';

    public $defaultRoute = 'document';

    public function init()
    {
        parent::init();
    }
}

<?php

namespace app\modules\spamdetector\controllers;

use yii\rest\ActiveController;

class DefaultController extends ActiveController
{

	public $modelClass = 'app\modules\spamdetector\models\Document';

    public function actionIndex()
    {
        return $this->render('index');
    }
}

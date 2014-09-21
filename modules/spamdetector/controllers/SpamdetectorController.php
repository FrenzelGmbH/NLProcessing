<?php

namespace app\modules\spamdetector\controllers;

// Yii2
use yii\rest\ActiveController;

//App
use app\modules\spamdetector\models\Document;

class SpamdetectorController extends ActiveController
{

	/**
	 * the document model class
	 * @var string for the object class
	 */
	public $modelClass = 'app\modules\spamdetector\models\Document';

	/**
	 * [actionReport description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function actionReport($id)
	{
		return $this->findModel($id);
	}

	/**
	 * [actionClassify description]
	 * @return [type] [description]
	 */
	public function actionClassify($id)
	{
		$model = $this->findModel($id);
		$model->classify();
		return $model;
	}

	/**
     * Finds the Document model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Document the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Document::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}

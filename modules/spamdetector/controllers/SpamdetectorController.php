<?php

namespace app\modules\spamdetector\controllers;

// Yii2
use yii\rest\ActiveController;

// NlpTools
use NlpTools\Models\FeatureBasedNB;
use NlpTools\Documents\TrainingSet;
use NlpTools\FeatureFactories\DataAsFeatures;
use NlpTools\Classifiers\MultinomialNBClassifier;

class SpamdetectorController extends ActiveController
{

	/**
	 * the document model class
	 * @var string for the object class
	 */
	public $modelClass = 'app\modules\spamdetector\models\Document';

}

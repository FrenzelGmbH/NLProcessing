<?php

namespace app\modules\spamdetector\models;

// Yii2
use yii\db\ActiveRecord;

// NlpTools
use NlpTools\Models\FeatureBasedNB;
use NlpTools\Documents\TrainingSet;
use NlpTools\FeatureFactories\DataAsFeatures;
use NlpTools\Classifiers\MultinomialNBClassifier;

class Document extends ActiveRecord
{
	/**
     * @return string the name of the table associated with this ActiveRecord class.
     */
	public static function tableName()
	{
		return 'document';
	}

    /**
     * @inheritdoc
     */
    public function rules()
    {
    	return [
    	[['subject', 'from'], 'required'],
    	[['subject', 'from', 'body', 'class'], 'string'],
    	[['from'],'email']
    	];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
    	return [
	    	'id' => \Yii::t('app', 'ID'),
	    	'subject' => \Yii::t('app', 'Subject'),
	    	'from' => \Yii::t('app', 'From'),
	    	'body' => \Yii::t('app', 'Body'),
	    	'class' => \Yii::t('app', 'Class'),
    	];
    }

    public static function classify()
    {
    	return true;
    }

    /**
     * this will train our allgorithem to learn what is ham and what is spam
     * @return [type] [description]
     */
	public static function train_new() 
	{

	}

	/**
	 * [retrain description]
	 * @param  FeatureBasedNB $model [description]
	 * @param  array          $ctx   [description]
	 * @return [type]                [description]
	 */
	public static function retrain(FeatureBasedNB $model,array &$ctx) 
	{

	}
}

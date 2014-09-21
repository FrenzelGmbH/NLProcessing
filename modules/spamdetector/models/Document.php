<?php

namespace app\modules\spamdetector\models;

use yii\db\ActiveRecord;

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
}

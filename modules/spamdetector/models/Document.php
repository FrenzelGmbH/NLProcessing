<?php

namespace app\modules\spamdetector\models;

use yii\base\Model;

class Document extends Model
{

	/**
	 * the subject of the content that will be parsed
	 * @var [type]
	 */
	public $subject;

	/**
	 * the sender of this content
	 * @var [type]
	 */
	public $from;

	/**
	 * the message content
	 * @var [type]
	 */
	public $body;

	/**
	 * the class of the document
	 * @var [type]
	 */
	public $class;

	public static function find()
	{
		$model = new Document();
		$model->subject = "Test";
		$model->from = "philipp@frenzel.net";
		$model->body = "Hello World";
		$model->class = "Ham";
		return $model;
	}

}

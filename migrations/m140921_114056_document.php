<?php

use yii\db\Schema;
use yii\db\Migration;

class m140921_114056_document extends Migration
{
    public function up()
    {
    	$this->createTable('document', [
            'id' => 'pk',
            'subject' => Schema::TYPE_STRING . ' NOT NULL',
           	'from' => Schema::TYPE_STRING . ' NOT NULL',
            'body' => Schema::TYPE_TEXT,
            'class' => Schema::TYPE_STRING . ' NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('document');
    }
}

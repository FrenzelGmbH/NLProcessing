<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\spamdetector\models\Document */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Document',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Documents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
